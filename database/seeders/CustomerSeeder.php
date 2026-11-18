<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $customers=[
            [
                'full_name' => 'Gohan Son',
                'email' => 'gohan@example.com',
                'phone' => '123-456-7890'
            ],
            [
                'full_name' => 'Vegeta Namek',
                'email' => 'vegeta@example.com',
                'phone' => '234-567-8901'
            ],
            [
                'full_name' => 'Trunks Vegeta',
                'email' => 'trunks@example.com',
                'phone' => '345-678-9012'
            ],
            [
                'full_name' => 'Piccolo Namek',
                'email' => 'piccolo@example.com',
                'phone' => '456-789-0123'
            ],
            [
                'full_name' => 'Goku Son',
                'email' => 'goku@example.com',
                'phone' => '567-890-1234'
            ]

        ];
        foreach($customers as $customer){
            DB::table('customers')->updateOrInsert(
                ['full_name' => $customer['full_name'],
                'email' => $customer['email'],
                'phone' => $customer['phone'],
                'created_at' => now(),
                'updated_at' => now()
                ]
                
            );
        }
    }
}
