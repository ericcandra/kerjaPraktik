<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('kode_transaksi');
            $table->foreignId('pelanggan_id')->constrained('pelanggans')->onDelete('cascade');
            $table->foreignId('barang_id')->constrained('barang')->onDelete('cascade');
            $table->integer('jumlah');
            $table->integer('harga_satuan');
            $table->integer('diskon')->default(0); // diskon dalam bentuk nominal
            $table->integer('total_harga');
            $table->string('metode_pembayaran');
            $table->string('kasir');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
};
