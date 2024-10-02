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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Peminjam',50);
            $table->enum("Peminjaman", ["Gedung", "Ruangan"]);
            $table->date('Tanggal_Peminjaman');
            $table->integer('durasi_peminjaman');
            $table->enum('status_peminjaman', ['Diajukan', 'Disetujui', 'Ditolak']);
            $table->boolean('terverifikasi') ->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
