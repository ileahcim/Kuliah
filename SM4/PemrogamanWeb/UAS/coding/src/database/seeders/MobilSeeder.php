<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mobil;
use Illuminate\Support\Facades\DB;


class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
        {
            DB::table('mobils')->delete(); // Hapus data lama

            Mobil::create([
                'title' => 'Project "The Beast"',
                'slug' => 'project-the-beast',
                'car_brand' => 'Honda',
                'car_model' => 'Civic Type R',
                'year' => '2023',
                'description' => 'Modifikasi penuh pada Honda Civic Type R dengan bodykit custom dan peningkatan performa mesin.',
                'image' => 'https://placehold.co/600x400/111827/FFFFFF?text=Civic+Type+R',
                'is_published' => true,
                'published_at' => now(),
            ]);

            Mobil::create([
                'title' => 'Project "Speed Demon"',
                'slug' => 'project-speed-demon',
                'car_brand' => 'Nissan',
                'car_model' => 'GT-R R35',
                'year' => '2020',
                'description' => 'Nissan GT-R dengan peningkatan turbo dan sistem knalpot aftermarket untuk performa maksimal.',
                'image' => 'https://placehold.co/600x400/1F2937/FFFFFF?text=GT-R+R35',
                'is_published' => true,
                'published_at' => now(),
            ]);

            Mobil::create([
                'title' => 'Project "Stealth"',
                'slug' => 'project-stealth',
                'car_brand' => 'Toyota',
                'car_model' => 'Supra MK5',
                'year' => '2022',
                'description' => 'Toyota Supra dengan cat hitam doff dan velg kustom, fokus pada estetika yang agresif.',
                'image' => 'https://placehold.co/600x400/1F2937/FFFFFF?text=Supra+MK5',
                'is_published' => true,
                'published_at' => now()->subDay(),
            ]);
        }
        
}