<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $admin = [
            [
                'full_name' => 'Admin 1',
                'second_id' => '120023121312312',
                'gender' => 'male',
                'email' => 'admin1@example.com',
                'role' => 'admin',
                'password' => bcrypt('password'),
            ]
        ];


        foreach ($admin as $key) {
            User::create($key);
        }
    }
}
