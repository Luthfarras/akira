<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'time' => "60 Menit",
            'price' => "Rp. 70.000",
            'layanan_id' => 1,
        ]);
        Course::create([
            'time' => "90 Menit",
            'price' => "Rp. 90.000",
            'layanan_id' => 1,
        ]);
        Course::create([
            'time' => "60 Menit",
            'price' => "Rp. 90.000",
            'layanan_id' => 2,
        ]);
        Course::create([
            'time' => "90 Menit",
            'price' => "Rp. 125.000",
            'layanan_id' => 2,
        ]);
        Course::create([
            'time' => "120 Menit",
            'price' => "Rp. 135.000",
            'layanan_id' => 2,
        ]);
        Course::create([
            'time' => "30 Menit",
            'price' => "Rp. 45.000",
            'layanan_id' => 3,
        ]);
        Course::create([
            'time' => "30 Menit",
            'price' => "Rp. 45.000",
            'layanan_id' => 4,
        ]);
        Course::create([
            'time' => "30 Menit",
            'price' => "Rp. 55.000",
            'layanan_id' => 5,
        ]);
        Course::create([
            'time' => "60 Menit",
            'price' => "Rp. 90.000",
            'layanan_id' => 6,
        ]);
        Course::create([
            'time' => "90 Menit",
            'price' => "Rp. 135.000",
            'layanan_id' => 6,
        ]);
        Course::create([
            'time' => "90 Menit",
            'price' => "Rp. 175.000",
            'layanan_id' => 7,
        ]);
        Course::create([
            'time' => "150 Menit",
            'price' => "Rp. 225.000",
            'layanan_id' => 8,
        ]);
        Course::create([
            'time' => "30 Menit",
            'price' => "Rp. 45.000",
            'layanan_id' => 9,
        ]);
    }
}
