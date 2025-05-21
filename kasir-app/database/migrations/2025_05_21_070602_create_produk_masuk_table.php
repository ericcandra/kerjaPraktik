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
    Schema::create('produk_masuk', function (Blueprint $table) {
        $table->id();
        $table->date('tanggal');
        $table->string('kode_produk');
        $table->string('nama_produk');
        $table->string('jenis_transaksi')->default('Masuk');
        $table->integer('jumlah_masuk');
        $table->bigInteger('harga_satuan');
        $table->bigInteger('total_harga');
        $table->string('supplier');
        $table->string('keterangan')->nullable();
        $table->timestamps();
    });
}
};
