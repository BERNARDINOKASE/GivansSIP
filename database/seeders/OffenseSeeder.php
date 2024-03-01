<?php

namespace Database\Seeders;

use App\Models\Offense;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OffenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Perundungan'
            ], [
                'name' => 'Kekerasan Verbal dan Non Verbal'
            ], [
                'name' => 'Kekerasa Fisik'
            ], [
                'name' => 'Pelecehan Seksual'
            ]
        ];

        foreach ($data as $value) {
            Offense::create($value);
        }
    }
}
