<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->delete();

        Product::create([
            'name' => 'T-Shirt Edisi Terbatas GarageAuto.id',
            'slug' => 't-shirt-garageauto-id',
            'description' => 'Kaos eksklusif dengan bahan katun premium dan desain logo GarageAuto.id.',
            'image' => 'https://placehold.co/400x400/374151/FFFFFF?text=T-Shirt',
            'price' => 150000,
            'stock' => 50,
            'is_available' => true,
        ]);

        Product::create([
            'name' => 'Mug Custom GarageAuto.id',
            'slug' => 'mug-garageauto-id',
            'description' => 'Mug keramik dengan desain unik, cocok untuk pecinta otomotif.',
            'image' => 'https://placehold.co/400x400/374151/FFFFFF?text=Mug',
            'price' => 75000,
            'stock' => 200,
            'is_available' => true,
        ]);

        Product::create([
            'name' => 'Sticker Pack Vol. 1',
            'slug' => 'sticker-pack-vol-1',
            'description' => 'Kumpulan stiker vinyl berkualitas tinggi, tahan air dan cuaca.',
            'image' => 'https://placehold.co/400x400/374151/FFFFFF?text=Sticker',
            'price' => 50000,
            'stock' => 100,
            'is_available' => true,
        ]);
    }
}