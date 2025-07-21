<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail; // <-- Import Mail
use App\Mail\OrderPlaced; // <-- Import Mailable kita

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi data (dengan tambahan alamat)
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'shipping_address' => 'required|string|min:10', // <-- Validasi alamat
            'quantity' => 'required|integer|min:1',
        ]);

        // PERBAIKAN BUG: Jika validasi gagal, kembalikan JSON error
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Harap periksa kembali isian Anda.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $product = Product::findOrFail($request->product_id);

            // 2. Buat pesanan baru (dengan alamat)
            $order = Order::create([
                'product_id' => $product->id,
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'shipping_address' => $request->shipping_address, // <-- Simpan alamat
                'quantity' => $request->quantity,
                'total_price' => $product->price * $request->quantity,
                'status' => 'pending',
            ]);

            // 3. Kirim email notifikasi ke pelanggan
            Mail::to($order->customer_email)->send(new OrderPlaced($order));

            // 4. Kirim respon sukses
            return response()->json([
                'success' => true,
                'message' => 'Pesanan Anda berhasil dibuat! Cek email Anda untuk konfirmasi.'
            ]);

        } catch (\Exception $e) {
            // Log error untuk debugging
            \Log::error('Checkout Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan pada server. Silakan coba lagi nanti.'
            ], 500);
        }
    }
}