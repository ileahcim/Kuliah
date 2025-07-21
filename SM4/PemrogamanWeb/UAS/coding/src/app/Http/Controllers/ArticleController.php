<?php

namespace App\Http\Controllers;

use App\Models\Article; // Import model Article
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Menampilkan halaman daftar semua artikel.
     * Fungsi ini akan dipanggil oleh rute /articles.
     */
    public function index(): View
    {
        // 1. Mengambil data dari database
        // - Hanya ambil artikel yang kolom 'is_published' nya bernilai true
        // - Urutkan dari yang paling baru berdasarkan kolom 'published_at'
        // - Batasi hasilnya menjadi 10 artikel per halaman (paginasi)
        $articles = Article::where('is_published', true)
                           ->latest('published_at')
                           ->paginate(10);

        // 2. Mengirim data ke tampilan (view)
        // - Laravel akan mencari file di: resources/views/articles/index.blade.php
        // - Variabel $articles akan tersedia di dalam file view tersebut.
        return view('articles.index', compact('articles'));
    }

    /**
     * Menampilkan satu artikel secara detail.
     * Fungsi ini akan dipanggil oleh rute /articles/{slug}.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\View\View
     */
    public function show(Article $article): View
    {
        // 1. Menerima data artikel
        // - Laravel secara otomatis menemukan artikel yang cocok berdasarkan 'slug' di URL.
        // - Ini disebut "Route Model Binding". Kita tidak perlu menulis query manual.

        // 2. Mengirim data artikel yang ditemukan ke tampilan
        // - Laravel akan mencari file di: resources/views/articles/show.blade.php
        // - Variabel $article akan tersedia di dalam file view tersebut.
        return view('articles.show', compact('article'));
    }
}
