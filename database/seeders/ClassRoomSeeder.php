<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'X',
                'class' => 'A'
            ], [
                'name' => 'X',
                'class' => 'B'
            ], [
                'name' => 'X',
                'class' => 'C'
            ], [
                'name' => 'X',
                'class' => 'D'
            ], [
                'name' => 'XI',
                'class' => 'A'
            ], [
                'name' => 'XI',
                'class' => 'B'
            ], [
                'name' => 'XI',
                'class' => 'C'
            ], [
                'name' => 'XI',
                'class' => 'D'
            ], [
                'name' => 'XII',
                'class' => 'A'
            ], [
                'name' => 'XII',
                'class' => 'B'
            ], [
                'name' => 'XII',
                'class' => 'C'
            ], [
                'name' => 'XII',
                'class' => 'D'
            ]
        ];

        foreach ($data as $value) {
            ClassRoom::create($value);
        }
    }
}
