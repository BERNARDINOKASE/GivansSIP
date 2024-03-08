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
                'id' => '1',
                'name' => 'X',
                'class' => 'A'
            ], [
                'id' => '2',
                'name' => 'X',
                'class' => 'B'
            ], [
                'id' => '3',
                'name' => 'X',
                'class' => 'C'
            ], [
                'id' => '4',
                'name' => 'X',
                'class' => 'D'
            ], [
                'id' => '5',
                'name' => 'XI',
                'class' => 'A'
            ], [
                'id' => '6',
                'name' => 'XI',
                'class' => 'B'
            ], [
                'id' => '7',
                'name' => 'XI',
                'class' => 'C'
            ], [
                'id' => '8',
                'name' => 'XI',
                'class' => 'D'
            ], [
                'id' => '9',
                'name' => 'XII',
                'class' => 'A'
            ], [
                'id' => '10',
                'name' => 'XII',
                'class' => 'B'
            ], [
                'id' => '11',
                'name' => 'XII',
                'class' => 'C'
            ], [
                'id' => '12',
                'name' => 'XII',
                'class' => 'D'
            ]
        ];

        foreach ($data as $value) {
            ClassRoom::create($value);
        }
    }
}
