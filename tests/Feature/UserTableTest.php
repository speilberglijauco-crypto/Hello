<?php

namespace Tests\Feature;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class UserTableTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutMiddleware(Authenticate::class);

        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('full_name');
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->timestamps();
        });
    }

    public function test_user_can_be_inserted_into_the_singular_table_and_shown(): void
    {
        $response = $this->post('/users', [
            'username' => 'ada',
            'full_name' => 'Ada Lovelace',
            'password' => 'password123',
        ]);

        $response->assertRedirect(route('users.index'));
        $this->assertDatabaseHas('user', [
            'username' => 'ada',
            'full_name' => 'Ada Lovelace',
        ]);
        $this->assertTrue(Hash::check('password123', DB::table('user')->where('username', 'ada')->value('password')));

        $this->get('/users')->assertOk()->assertSee('Ada Lovelace');
    }

    public function test_username_uniqueness_is_checked_against_the_singular_table(): void
    {
        DB::table('user')->insert([
            'username' => 'ada',
            'full_name' => 'Ada Lovelace',
            'password' => Hash::make('password123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $response = $this->from('/users/create')->post('/users', [
            'username' => 'ada',
            'full_name' => 'Another Ada',
            'password' => 'password123',
        ]);

        $response->assertRedirect('/users/create')->assertSessionHasErrors('username');
        $this->assertSame(1, DB::table('user')->where('username', 'ada')->count());
    }
}
