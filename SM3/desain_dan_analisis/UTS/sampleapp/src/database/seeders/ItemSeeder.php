<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run()
    {
        Item::create([
            'kode_barang' => 'BRG001',
            'nama_barang' => 'Laptop Asus',
            'kategori' => 'Elektronik',
            'stok' => 10,
            'harga' => 7500000,
            'deskripsi' => 'Laptop Asus dengan prosesor Intel i5.'
        ]);

        Item::create([
            'kode_barang' => 'BRG002',
            'nama_barang' => 'Mouse Logitech',
            'kategori' => 'Aksesoris Komputer',
            'stok' => 50,
            'harga' => 150000,
            'deskripsi' => 'Mouse wireless Logitech yang ergonomis.'
        ]);
    }
}
