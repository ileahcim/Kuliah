<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VerifiedSubscriber;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VerifiedSubscriberSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('verified_subscribers')->delete();

        VerifiedSubscriber::create([
            'email' => 'subscriber@example.com',
            'token' => Str::random(32),
            'verified_at' => now(), // Anggap sudah terverifikasi untuk data dummy
        ]);
    }
}