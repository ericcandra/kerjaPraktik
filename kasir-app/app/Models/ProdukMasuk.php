<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukMasuk extends Model
{
    use HasFactory;

    protected $table = 'produk_masuk';

    protected $fillable = [
        'tanggal', 'kode_produk', 'nama_produk', 'jenis_transaksi',
        'jumlah_masuk', 'harga_satuan', 'total_harga', 'supplier_id', 'keterangan'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
}


    //

