<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
            [
                'username' => 'Gohan',
                'full_name' => 'Gohan Son'
            ],
            [
                'username' => 'Vegeta',
                'full_name' => 'Vegeta Namek'
            ],
            [
                'username' => 'Trunks',
                'full_name' => 'Trunks Vegeta'
            ],
            [
                'username' => 'Piccolo',
                'full_name' => 'Piccolo Namek'
            ],
            [
                'username' => 'Goku',
                'full_name' => 'Goku Son'
            ]

        ];
        foreach($users as $user){
            DB::table('user')->updateOrInsert(
                ['username' => $user['username']],
                [
                    'full_name' => $user['full_name'],
                    'password' => Hash::make('password123'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    
    }
}
