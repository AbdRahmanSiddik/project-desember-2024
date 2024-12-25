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
        Schema::create('pegadaians', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pegadaian')->autoIncrement();
            $table->string('token_pegadaian', 32);
            $table->foreignId('rekening_id')->references('id_rekening')->on('rekenings')->cascadeOnDelete();
            $table->string('gambar_barang', 100);
            $table->text('detail_barang');
            $table->decimal('jumlah', 19, 2);
            $table->decimal('bunga', 19, 2);
            $table->enum('status', ['gadai', 'pending', 'lunas', 'gagal'])->default('pending');
            $table->text('deskripsi');
            $table->foreignId('_teller')->constrained('users')->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegadaians');
    }
};
