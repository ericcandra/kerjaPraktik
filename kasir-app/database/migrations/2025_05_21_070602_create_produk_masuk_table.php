<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('produk_masuk', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('kode_produk');
            $table->string('nama_produk');
            $table->string('jenis_transaksi')->default('Masuk');
            $table->integer('jumlah_masuk');
            $table->bigInteger('harga_satuan');
            $table->bigInteger('total_harga');
            $table->foreignId('id_suppliers')->constrained('suppliers')->onDelete('cascade');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produk_masuk');
    }
};
