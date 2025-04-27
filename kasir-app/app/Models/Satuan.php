<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;

    protected $table = 'satuan'; // Nama tabel
    protected $fillable = ['satuan', 'keterangan']; // Field yang bisa diisi
}
