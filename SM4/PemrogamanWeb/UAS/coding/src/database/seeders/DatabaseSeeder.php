<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat role 'super_admin' jika belum ada
        $role = Role::firstOrCreate(['name' => 'super_admin']);

        // 2. Buat 1 user admin
        $user = User::factory()->create([
            'name' => 'Admin GarageAuto',
            'email' => 'admin@garageauto.id',
            'password' => bcrypt('password'), // bisa diganti sesuai kebutuhan
        ]);

        // 3. Assign role ke user
        $user->assignRole($role);

            $this->call([
            MobilSeeder::class,
            ArticleSeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
            ContactMessageSeeder::class,
            VerifiedSubscriberSeeder::class,
        ]);

    }
}
