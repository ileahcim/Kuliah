<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->delete();

        Article::create([
            'title' => '5 Cara Mudah Merawat Turbocharged Engine',
            'slug' => 'cara-merawat-turbo-engine',
            'content' => '<p>Merawat mesin dengan turbo memerlukan perhatian khusus. Berikut adalah lima tips esensial agar turbo mobil Anda awet dan performanya tetap maksimal...</p>',
            'image' => 'https://placehold.co/400x300/1F2937/FFFFFF?text=Tips+Mesin',
            'is_published' => true,
            'published_at' => now(),
        ]);

        Article::create([
            'title' => 'Panduan Lengkap Modifikasi Suspensi Mobil',
            'slug' => 'modifikasi-suspensi-mobil',
            'content' => '<p>Modifikasi suspensi dapat meningkatkan performa dan kenyamanan berkendara. Pelajari berbagai jenis suspensi dan cara memilih yang tepat untuk mobil Anda...</p>',
            'image' => 'https://placehold.co/400x300/111827/FFFFFF?text=Modifikasi+Suspensi',
            'is_published' => true,
            'published_at' => now(),
        ]);
    }
}
