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
        $headMaster = [
            [
                'full_name' => 'Kepala Sekolah',
                'second_id' => '12002312199992',
                'gender' => 'male',
                'email' => 'kepsek@example.com',
                'role' => 'kepalasekolah',
                'password' => bcrypt('password'),
            ]
        ];
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

        $gTeacher = [
            [
                'full_name' => 'Wali Kelas X A',
                'class_room_id' => '1',
                'second_id' => '19902222312312',
                'gender' => 'male',
                'email' => 'walikelasxa@example.com',
                'role' => 'waliKelas',
                'password' => bcrypt('password'),
            ], [
                'full_name' => 'Wali Kelas X B',
                'class_room_id' => '2',
                'second_id' => '199011112312312',
                'gender' => 'male',
                'email' => 'walikelasxb@example.com',
                'role' => 'waliKelas',
                'password' => bcrypt('password'),
            ]
        ];

        foreach ($student as $key) {
            User::create($key);
        }
        foreach ($gTeacher as $key) {
            User::create($key);
        }
        foreach ($admin as $key) {
            User::create($key);
        }
        foreach ($headMaster as $key) {
            User::create($key);
        }
    }
}
