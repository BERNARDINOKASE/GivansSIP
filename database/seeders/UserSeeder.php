<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'full_name' => 'Bernard',
                'second_id' => '123123121312312',
                'gender' => 'male',
                'email' => 'bernard@example.com',
                'role' => 'admin',
                'password' => bcrypt('password'),
            ], [
                'full_name' => 'Awi',
                'second_id' => '199923121312312',
                'gender' => 'male',
                'email' => 'awi@example.com',
                'role' => 'student',
                'password' => bcrypt('password'),
            ], [
                'full_name' => 'immo',
                'second_id' => '199000121312312',
                'gender' => 'male',
                'email' => 'imo@example.com',
                'role' => 'guest',
                'password' => bcrypt('password'),
            ]
        ];

        foreach ($data as $key) {
            User::create($key);
        }
    }
}
