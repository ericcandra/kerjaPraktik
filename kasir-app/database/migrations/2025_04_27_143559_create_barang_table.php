<?php

// database/migrations/xxxx_xx_xx_create_barang_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            // $table->string('kode_barang')->unique();
            $table->foreignId('id_kategori')->constrained('kategori_barangs')->onDelete('cascade');
            $table->string('nama');
            $table->string('merek');
            // $table->integer('stok');
            $table->foreignId('id_satuan')->constrained('satuan')->onDelete('cascade');
            $table->string('berat_kemasan');
            $table->decimal('harga', 15, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang');
    }
}

