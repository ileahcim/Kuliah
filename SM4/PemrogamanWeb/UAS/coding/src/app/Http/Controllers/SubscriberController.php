<?php

namespace App\Http\Controllers;

use App\Models\VerifiedSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail; 
use App\Mail\SubscriberVerification;

class SubscriberController extends Controller
{
    /**
     * Menyimpan subscriber baru dari form newsletter.
     */
    public function store(Request $request)
    {
        // ... (kode validasi yang sudah ada) ...

        $subscriber = VerifiedSubscriber::create([
            'email' => $request->email,
            'token' => Str::random(32),
            'verified_at' => null,
        ]);

        // KIRIM EMAIL VERIFIKASI
        Mail::to($subscriber->email)->send(new SubscriberVerification($subscriber));

        return redirect('/#contact')->with('success', 'Terima kasih! Silakan cek email Anda untuk verifikasi.');
    }

    /**
     * TAMBAHKAN METHOD BARU INI
     * Untuk menangani klik link verifikasi dari email.
     */
    public function verify(VerifiedSubscriber $subscriber)
    {
        if (! request()->hasValidSignature()) {
            abort(401); // Link tidak valid atau sudah kedaluwarsa
        }

        $subscriber->update([
            'verified_at' => now(),
            'token' => null, // Hapus token setelah verifikasi
        ]);

        // Tampilkan pesan sukses ke pengguna
        return "<h1>Email Anda berhasil diverifikasi!</h1><p>Terima kasih telah bergabung.</p>";
    }
}