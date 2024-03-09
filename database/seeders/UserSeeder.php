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


        $student = [
            [
                'full_name' => 'Bernard',
                'second_id' => '123123121312312',
                'class_room_id' => '1',
                'gender' => 'male',
                'email' => 'bernard@example.com',
                'role' => 'siswa',
                'password' => bcrypt('password'),
            ], [
                'full_name' => 'Awi',
                'second_id' => '199923121312312',
                'class_room_id' => '1',
                'gender' => 'male',
                'email' => 'awi@example.com',
                'role' => 'siswa',
                'password' => bcrypt('password'),
            ], [
                'full_name' => 'immo',
                'second_id' => '199000121312312',
                'class_room_id' => '2',
                'gender' => 'male',
                'email' => 'imo@example.com',
                'role' => 'siswa',
                'password' => bcrypt('password'),
            ], [
                'full_name' => 'milan',
                'second_id' => '199020121312312',
                'class_room_id' => '2',
                'gender' => 'male',
                'email' => 'milan@example.com',
                'role' => 'siswa',
                'password' => bcrypt('password'),
            ]
        ];

        foreach ($student as $key) {
            User::create($key);
        }
    }
}
