<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        // Ambil semua produk yang tersedia
        $products = Product::where('is_available', true)->paginate(9);

        return view('products.index', compact('products'));
    }
}