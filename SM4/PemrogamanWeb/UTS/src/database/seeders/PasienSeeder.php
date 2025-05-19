<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasien;

class PasienSeeder extends Seeder
{
    public function run(): void
    {
        Pasien::factory(10)->create();
    }
}
