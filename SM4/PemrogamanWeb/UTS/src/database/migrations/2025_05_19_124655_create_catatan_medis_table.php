<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('catatan_medis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kunjungan_id')->constrained()->cascadeOnDelete();
            $table->text('diagnosa');
            $table->text('resep');
            $table->text('saran');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatan_medis');
    }
};
