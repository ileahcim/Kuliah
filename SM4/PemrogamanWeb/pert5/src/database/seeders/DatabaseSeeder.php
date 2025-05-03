<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat role super_admin kalau belum ada
        Role::firstOrCreate([
            'name' => 'super_admin',
            'guard_name' => 'web',
        ]);

        // Cek kalau user belum ada
        $user = User::where('email', 'admin@admin.com')->first();

        if (!$user) {
            $user = User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
            ]);
        }

        // Assign role ke user (cek juga supaya tidak assign berkali-kali)
        if (!$user->hasRole('super_admin')) {
            $user->assignRole('super_admin');
        }
    }
}
