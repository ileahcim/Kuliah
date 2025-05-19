<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKontrol extends Model
{
    use HasFactory;

    protected $fillable = [
        'pasien_id',
        'tanggal_kontrol',
        'status',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
