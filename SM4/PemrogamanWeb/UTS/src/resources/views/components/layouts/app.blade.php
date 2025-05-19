<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Puskesmas' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
    
    @stack('styles') {{-- Tambahkan ini untuk memuat CSS dari partial --}}
    @livewireStyles
</head>

<body class="bg-gray-100">
    {{ $slot }}
    @livewireScripts
</body>
</html>
