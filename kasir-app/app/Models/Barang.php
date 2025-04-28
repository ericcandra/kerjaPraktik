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
        'id_kategori', 'nama', 'stok', 'id_satuan', 'harga', 'keterangan'
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

