<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal', 'kode_transaksi', 'pelanggan_id', 'barang_id',
        'jumlah', 'harga_satuan', 'diskon', 'total_harga',
        'metode_pembayaran', 'kasir'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}

