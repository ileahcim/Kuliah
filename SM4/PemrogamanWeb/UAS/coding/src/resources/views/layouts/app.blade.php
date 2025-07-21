{{-- 
    File: resources/views/layouts/app.blade.php (Versi Final dengan Link yang Benar)
    Ini adalah perbaikan untuk masalah tampilan yang berantakan.
--}}

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GarageAuto.id')</title>
    
    <!-- PERBAIKAN: Menghapus format Markdown dari link CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'brand-dark': '#111827',
                        'brand-light': '#F9FAFB',
                        'brand-primary': '#3B82F6',
                        'brand-secondary': '#10B981',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'inter', sans-serif;
            background-color: #030712;
            color: #E5E7EB;
        }
        .hero-gradient {
            background: radial-gradient(ellipse at top, rgba(59, 130, 246, 0.15), transparent 60%);
        }
        .section-gradient {
            background: radial-gradient(ellipse at center, rgba(59, 130, 246, 0.05), transparent 70%);
        }
    </style>
    @yield('head-scripts')
</head>
<body>

    <nav class="bg-brand-dark/80 backdrop-blur-lg sticky top-0 z-50 border-b border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="text-3xl font-extrabold text-white tracking-wider">
                        Garage<span class="text-brand-primary">Auto</span>.id
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-6">
                        <a href="{{ route('home') }}#gallery" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Galeri Mobil</a>
                        <a href="{{ route('home') }}#blog" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Artikel</a>
                        <a href="{{ route('products.index') }}" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Merchandise</a>
                        <a href="{{ route('home') }}#contact" class="bg-brand-primary text-white hover:bg-blue-600 px-4 py-2 rounded-md text-sm font-bold transition-transform hover:scale-105">Kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="relative z-40 bg-brand-dark border-t border-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-center space-x-6 md:order-2">
                    <a href="#" class="text-gray-400 hover:text-white"><span class="sr-only">Instagram</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 012.153 2.153c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-2.153 2.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.013-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-2.153-2.153c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 012.153-2.153c.636-.247 1.363.416 2.427.465C9.53 2.013 9.884 2 12.315 2zm-2.003 6.884a3.116 3.116 0 106.232 0 3.116 3.116 0 00-6.232 0zM12 15.884a3.884 3.884 0 110-7.768 3.884 3.884 0 010 7.768zm4.935-7.912a1.168 1.168 0 100-2.336 1.168 1.168 0 000 2.336z" clip-rule="evenodd" /></svg></a>
                    <a href="#" class="text-gray-400 hover:text-white"><span class="sr-only">YouTube</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.78 22 12 22 12s0 3.22-.42 4.814a2.506 2.506 0 01-1.768 1.768c-1.594.42-7.812.42-7.812.42s-6.218 0-7.812-.42a2.506 2.506 0 01-1.768-1.768C2 15.22 2 12 2 12s0-3.22.42-4.814a2.506 2.506 0 011.768-1.768C5.782 5 12 5 12 5s6.218 0 7.812.418zM9.75 15.5V8.5l6.5 3.5-6.5 3.5z" clip-rule="evenodd" /></svg></a>
                </div>
                <div class="mt-8 md:mt-0 md:order-1">
                    <p class="text-center text-base text-gray-400">&copy; {{ date('Y') }} GarageAuto.id. Dibuat dengan &hearts; untuk Pemrograman Web.</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
