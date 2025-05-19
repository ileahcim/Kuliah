<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanMedis extends Model
{
    use HasFactory;

    protected $fillable = [
        'kunjungan_id',
        'diagnosa',
        'resep',
        'saran',
    ];

    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class);
    }
}
