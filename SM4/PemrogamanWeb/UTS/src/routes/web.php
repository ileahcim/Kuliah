<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Livewire\ShowHomePage;

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

// ✅ Halaman awal tampil ShowHomePage
Route::get('/', ShowHomePage::class);
