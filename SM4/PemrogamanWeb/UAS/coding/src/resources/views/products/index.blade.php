{{-- 
    File: resources/views/products/index.blade.php (Versi Final)
    Sudah dilengkapi dengan field alamat dan perbaikan bug JSON.
--}}

@extends('layouts.app')

@section('title', 'Merchandise - GarageAuto.id')

@section('head-scripts')
    {{-- Memuat Alpine.js via CDN di head agar siap saat body di-render --}}
    <script src="//unpkg.com/alpinejs" defer></script>
@endsection

@section('content')
    <div x-data="{ 
            showModal: false, 
            selectedProduct: null, 
            customerName: '', 
            customerEmail: '',
            shippingAddress: '',
            isLoading: false,
            successMessage: '',
            errorMessage: ''
         }" 
         @keydown.escape.window="showModal = false"
         class="relative">

        {{-- Bagian Header Halaman --}}
        <div class="bg-brand-dark">
            <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block">Koleksi Merchandise Resmi</span>
                    <span class="block text-brand-primary">GarageAuto.id</span>
                </h2>
                <p class="mt-4 text-lg leading-6 text-gray-300">
                    Tunjukkan dukunganmu dengan memiliki koleksi eksklusif dari kami. Dibuat dengan kualitas terbaik untuk para penggemar otomotif sejati.
                </p>
            </div>
        </div>

        {{-- Grid Daftar Produk --}}
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @forelse ($products as $product)
                    <div class="group bg-gray-800/50 rounded-xl overflow-hidden border border-gray-700 p-4 flex flex-col">
                        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-700">
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="h-full w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <div class="mt-4 flex flex-col flex-grow">
                            <h3 class="text-lg font-bold text-white">{{ $product->name }}</h3>
                            <p class="mt-1 text-sm text-gray-400 line-clamp-2 flex-grow">{{ $product->description }}</p>
                            <div class="mt-4 flex items-center justify-between">
                                <p class="text-xl font-bold text-white">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                                <button 
                                    @click="showModal = true; selectedProduct = {{ json_encode($product) }}; successMessage = ''; errorMessage = '';"
                                    class="bg-brand-primary text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-blue-600 transition-colors">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-400 text-xl">Belum ada merchandise yang tersedia saat ini.</p>
                    </div>
                @endforelse
            </div>
            <div class="mt-12">
                {{ $products->links() }}
            </div>
        </div>

        {{-- Pop-up (Modal) Checkout --}}
        <div x-show="showModal" 
             style="display: none;"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 px-4">
            
            <div @click.outside="showModal = false" 
                 x-show="showModal"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 class="bg-gray-800 rounded-lg shadow-xl w-full max-w-lg p-6 md:p-8 relative">
                
                <button @click="showModal = false" class="absolute top-4 right-4 text-gray-400 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>

                <h3 class="text-2xl font-bold text-white mb-2">Formulir Pemesanan</h3>
                <p class="text-gray-400 mb-6">Selesaikan pesanan untuk: <strong class="text-brand-primary" x-text="selectedProduct?.name"></strong></p>

                <form @submit.prevent="
                    isLoading = true;
                    errorMessage = '';
                    fetch('{{ route('checkout.store') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            product_id: selectedProduct.id,
                            customer_name: customerName,
                            customer_email: customerEmail,
                            shipping_address: shippingAddress,
                            quantity: 1
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if(data.success) {
                            successMessage = data.message;
                            customerName = '';
                            customerEmail = '';
                            shippingAddress = '';
                            setTimeout(() => { showModal = false; successMessage = '' }, 3000);
                        } else {
                            throw new Error(data.message || 'Terjadi kesalahan. Periksa kembali isian Anda.');
                        }
                    })
                    .catch(error => {
                        errorMessage = error.message;
                    })
                    .finally(() => isLoading = false)
                ">
                    <div class="space-y-4">
                        <div>
                            <label for="customer_name" class="block text-sm font-medium text-gray-300">Nama Lengkap</label>
                            <input type="text" x-model="customerName" id="customer_name" required class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-brand-primary focus:border-brand-primary">
                        </div>
                        <div>
                            <label for="customer_email" class="block text-sm font-medium text-gray-300">Alamat Email</label>
                            <input type="email" x-model="customerEmail" id="customer_email" required class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-brand-primary focus:border-brand-primary">
                        </div>
                        <div>
                            <label for="shipping_address" class="block text-sm font-medium text-gray-300">Alamat Pengiriman</label>
                            <textarea x-model="shippingAddress" id="shipping_address" rows="3" required class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-brand-primary focus:border-brand-primary"></textarea>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button type="submit" :disabled="isLoading" class="w-full bg-brand-primary text-white font-bold py-3 px-4 rounded-md flex items-center justify-center hover:bg-blue-600 disabled:bg-gray-500 transition-colors">
                            <span x-show="!isLoading">Konfirmasi Pesanan</span>
                            <span x-show="isLoading">
                                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>
                
                <div x-show="successMessage" style="display: none;" class="mt-4 text-center bg-green-500/20 text-green-300 p-3 rounded-md" x-text="successMessage"></div>
                <div x-show="errorMessage" style="display: none;" class="mt-4 text-center bg-red-500/20 text-red-300 p-3 rounded-md" x-text="errorMessage"></div>
            </div>
        </div>
    </div>
