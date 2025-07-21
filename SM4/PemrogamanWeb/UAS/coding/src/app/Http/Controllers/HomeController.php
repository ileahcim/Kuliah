<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        // Ambil 3 mobil terbaru yang sudah di-publish untuk ditampilkan
        $featuredMobils = Mobil::where('is_published', true)
                               ->latest('published_at')
                               ->take(3)
                               ->get();

        // Ambil 2 artikel terbaru yang sudah di-publish
        $latestArticles = Article::where('is_published', true)
                                 ->latest('published_at')
                                 ->take(2)
                                 ->get();
        
        // Kirim data ke view 'home'
        return view('home', [
            'featuredMobils' => $featuredMobils,
            'latestArticles' => $latestArticles,
        ]);
    }
}