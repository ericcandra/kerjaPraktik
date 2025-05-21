<?php

// app/Models/Barang.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'kode_barang','id_kategori', 'nama', 'stok', 'id_satuan','berat_kemasan', 'harga', 
    ];

    // Relasi ke kategori
    public function kategori()
    {
        return $this->belongsTo(KategoriBarang::class, 'id_kategori');
    }

    // Relasi ke satuan
    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'id_satuan');
    }
}

