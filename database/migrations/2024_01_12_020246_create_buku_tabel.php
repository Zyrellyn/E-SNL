<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_buku');
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->enum('status', ['Tersedia', 'Tidak Tersedia']);
            $table->enum('kategori', ['romance', 'fantasy','horor', 'mystery','comedy', 'thriller', 'petualangan ']);
            $table->text('sinopsis');
            $table->string('gambar');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_tabel');
    }
};
