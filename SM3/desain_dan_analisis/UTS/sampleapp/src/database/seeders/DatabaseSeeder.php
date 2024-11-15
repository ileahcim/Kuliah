<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat Role Super Admin jika belum ada
        $superAdminRole = Role::firstOrCreate(['name' => 'super_admin']);
        
        // Buat User Super Admin
        $adminUser = \App\Models\User::updateOrCreate(
            ['email' => 'admin@admin.com'], 
            [
                'name' => 'Admin',
                'password' => bcrypt('password123')
            ]
        );
        // Assign Role Super Admin
        if (!$adminUser->hasRole('super_admin')) {
            $adminUser->assignRole('super_admin');
        }
        
        // Buat Role User jika belum ada
        $userRole = Role::firstOrCreate(['name' => 'user']);
        
        // Tambahkan permission "akses modul Items" jika belum ada
        $viewItemsPermission = Permission::firstOrCreate(['name' => 'akses modul Items']);
        
        // Berikan permission "akses modul Items" kepada role User
        $userRole->givePermissionTo($viewItemsPermission);

        // Buat User dengan Role User untuk testing
        $generalUser = \App\Models\User::updateOrCreate(
            ['email' => 'user@user.com'], 
            [
                'name' => 'User',
                'password' => bcrypt('user12345')
            ]
        );
        if (!$generalUser->hasRole('user')) {
            $generalUser->assignRole('user');
        }
    }
}
