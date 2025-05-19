<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'nik' => $this->faker->unique()->numerify('3271##########'),
            'tanggal_lahir' => $this->faker->date('Y-m-d'),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'alamat' => $this->faker->address,
            'no_hp' => $this->faker->phoneNumber,
        ];
    }
}
