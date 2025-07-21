{{-- 
    File: resources/views/home.blade.php (Versi Final)
    Sudah dilengkapi dengan form subscribe yang fungsional.
--}}

@extends('layouts.app')

@section('title', 'GarageAuto.id - Galeri & Blog Otomotif')

@section('content')

    <!-- Hero Section -->
    <header class="relative hero-gradient pt-24 pb-32">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight tracking-tighter">
                Seni Modifikasi Otomotif dalam Setiap Detail
            </h1>
            <p class="mt-6 text-lg md:text-xl text-gray-400 max-w-2xl mx-auto">
                Jelajahi koleksi mobil modifikasi eksklusif, baca cerita di balik setiap proyek, dan temukan merchandise resmi kami.
            </p>
            <div class="mt-10 flex justify-center gap-4">
                <a href="#gallery" class="bg-brand-primary text-white font-bold py-3 px-8 rounded-lg text-lg hover:bg-blue-600 transition-all transform hover:scale-105 shadow-lg shadow-blue-500/20">
                    Lihat Galeri
                </a>
                <a href="{{ route('articles.index') }}" class="bg-gray-700 text-white font-bold py-3 px-8 rounded-lg text-lg hover:bg-gray-600 transition-all transform hover:scale-105">
                    Baca Artikel
                </a>
            </div>
        </div>
    </header>

    <div class="overflow-hidden">
        <!-- Galeri Mobil Unggulan -->
        <section id="gallery" class="py-24 section-gradient">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-extrabold text-white">Galeri Unggulan</h2>
                    <p class="mt-4 text-lg text-gray-400">Beberapa karya terbaik dari garasi kami.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($featuredMobils as $mobil)
                        <div class="group bg-gray-800/50 rounded-xl overflow-hidden border border-gray-700 hover:border-brand-primary transition-all duration-300">
                            <div class="overflow-hidden">
                                <img class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500" src="{{ $mobil->image }}" alt="{{ $mobil->title }}">
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-white">{{ $mobil->title }}</h3>
                                <p class="text-gray-400 mt-2">{{ $mobil->car_brand }} {{ $mobil->car_model }} - {{ $mobil->year }}</p>
                                <a href="#" class="inline-block mt-4 bg-brand-primary text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-blue-600 transition-colors">Lihat Detail</a>
                            </div>
                        </div>
                    @empty
                        <p class="col-span-full text-center text-gray-400">Belum ada mobil di galeri.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Artikel Terbaru -->
        <section id="blog" class="py-24 bg-brand-dark">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-extrabold text-white">Dari Ruang Tulis Kami</h2>
                    <p class="mt-4 text-lg text-gray-400">Wawasan dan cerita terbaru dari dunia otomotif.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                     @forelse($latestArticles as $article)
                        <div class="group flex flex-col md:flex-row items-center gap-6">
                            <div class="md:w-1/3 flex-shrink-0">
                                <img class="w-full h-48 object-cover rounded-lg group-hover:opacity-80 transition-opacity" src="{{ $article->image }}" alt="{{ $article->title }}">
                            </div>
                            <div class="md:w-2/3">
                                <p class="text-sm text-brand-primary font-bold">ARTIKEL</p>
                                <h3 class="mt-2 text-2xl font-bold text-white leading-tight">
                                    <a href="{{ route('articles.show', $article) }}" class="hover:text-gray-300">{{ $article->title }}</a>
                                </h3>
                                <p class="mt-3 text-gray-400 line-clamp-2">{!! Str::limit(strip_tags($article->content), 150) !!}</p>
                            </div>
                        </div>
                     @empty
                        <p class="col-span-full text-center text-gray-400">Belum ada artikel terbaru.</p>
                     @endforelse
                </div>
            </div>
        </section>

        <!-- Newsletter Subscription (Versi yang Sudah Diperbaiki) -->
        <section id="contact" class="py-24 section-gradient">
            <div class="max-w-2xl mx-auto text-center px-4">
                <h2 class="text-4xl font-extrabold text-white">Jangan Ketinggalan Update</h2>
                <p class="mt-4 text-lg text-gray-400">
                    Daftarkan email Anda untuk mendapatkan berita terbaru, penawaran merchandise eksklusif, dan undangan event khusus langsung ke inbox Anda.
                </p>

                <!-- Tampilkan pesan sukses atau error -->
                @if (session('success'))
                    <div class="mt-8 bg-green-500/20 text-green-300 p-4 rounded-md">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="mt-8 bg-red-500/20 text-red-300 p-4 rounded-md">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form yang sudah diperbaiki -->
                <form action="{{ route('subscribe.store') }}" method="POST" class="mt-8 flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    @csrf
                    <input type="email" name="email" value="{{ old('email') }}" required class="flex-grow w-full bg-gray-800 border border-gray-600 text-white rounded-md px-4 py-3 focus:ring-2 focus:ring-brand-primary focus:border-brand-primary" placeholder="Masukkan alamat email Anda">
                    <button type="submit" class="bg-brand-primary text-white font-bold py-3 px-6 rounded-md hover:bg-blue-600 transition-all transform hover:scale-105">
                        Subscribe
                    </button>
                </form>
            </div>
        </section>
    </div>
@endsection
