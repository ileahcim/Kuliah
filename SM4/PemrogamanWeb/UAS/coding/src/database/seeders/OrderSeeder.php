<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product; // Penting untuk mengambil produk
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->delete();

        // Pastikan ada produk untuk di-order
        $product = Product::first();

        if ($product) {
            Order::create([
                'product_id' => $product->id,
                'customer_name' => 'John Doe',
                'customer_email' => 'john.doe@example.com',
                'quantity' => 1,
                'total_price' => $product->price,
                'status' => 'completed',
            ]);
        }
    }
}