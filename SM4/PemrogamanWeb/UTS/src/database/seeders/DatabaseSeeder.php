<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan roles tersedia
        Role::firstOrCreate(['name' => 'super_admin']);
        Role::firstOrCreate(['name' => 'dokter']);
        Role::firstOrCreate(['name' => 'petugas']);

        // Admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            ['name' => 'Admin', 'password' => bcrypt('password')]
        );
        $admin->assignRole('super_admin');

        // Dokter
        $dokter = User::firstOrCreate(
            ['email' => 'dokter@dokter.com'],
            ['name' => 'Dokter', 'password' => bcrypt('password')]
        );
        $dokter->assignRole('dokter');

        // Petugas
        $petugas = User::firstOrCreate(
            ['email' => 'petugas@petugas.com'],
            ['name' => 'Petugas', 'password' => bcrypt('password')]
        );
        $petugas->assignRole('petugas');
    }
}
