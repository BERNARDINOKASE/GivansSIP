<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gTeacher = [
            [
                'full_name' => 'Guru Bimbingan Konseling',
                'second_id' => '199022223101010',
                'gender' => 'male',
                'email' => 'gurubk@example.com',
                'role' => 'guruBk',
                'password' => bcrypt('password'),
            ]
        ];

        $hrTeacher = [
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
        foreach ($hrTeacher as $key) {
            User::create($key);
        }
        foreach ($gTeacher as $key) {
            User::create($key);
        }
        foreach ($headMaster as $key) {
            User::create($key);
        }
    }
}
