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
        Schema::create('notulensis', function (Blueprint $table) {
            $table->id();
            $table->text('isi_notulensi');
            $table->text('tindak_lanjut');
            $table->text('catatan_penting');
            $table->timestamps();

            # Relasi
            $table->unsignedBigInteger('rapat_id');
            $table->foreign('rapat_id')->references('id')->on('rapats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notulensis');
    }
};
