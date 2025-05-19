<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_hp',
    ];

    public function kunjungan()
    {
        return $this->hasMany(Kunjungan::class);
    }

    public function jadwalKontrol()
    {
        return $this->hasMany(JadwalKontrol::class);
    }
}
