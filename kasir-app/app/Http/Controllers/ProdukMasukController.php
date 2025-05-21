<?php

namespace App\Http\Controllers;

use App\Models\ProdukMasuk;
use Illuminate\Http\Request;

class ProdukMasukController extends Controller
{
    // Menampilkan semua data produk masuk
    public function index()
    {
        $produkMasuk = ProdukMasuk::all(); // Ganti dari $data ke $produkMasuk
        return view('produk_masuk.index', compact('produkMasuk'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('produk_masuk.create');
    }

    // Menyimpan data produk masuk baru
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kode_produk' => 'required|string',
            'nama_produk' => 'required|string',
            'jumlah_masuk' => 'required|integer',
            'harga_satuan' => 'required|integer',
            'supplier' => 'required|string',
        ]);

        // Hitung total harga otomatis
        $request['total_harga'] = $request->jumlah_masuk * $request->harga_satuan;

        ProdukMasuk::create($request->all());

        return redirect()->route('produk-masuk.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menampilkan form edit produk masuk
    public function edit($id)
    {
        $produk = ProdukMasuk::findOrFail($id);
        return view('produk_masuk.edit', compact('produk'));
    }

    // Menyimpan perubahan data produk masuk
    public function update(Request $request, $id)
    {
        $produk = ProdukMasuk::findOrFail($id);

        $request->validate([
            'tanggal' => 'required|date',
            'kode_produk' => 'required|string',
            'nama_produk' => 'required|string',
            'jumlah_masuk' => 'required|integer',
            'harga_satuan' => 'required|integer',
            'supplier' => 'required|string',
        ]);

        // Update total harga
        $request['total_harga'] = $request->jumlah_masuk * $request->harga_satuan;

        $produk->update($request->all());

        return redirect()->route('produk-masuk.index')->with('success', 'Data berhasil diubah.');
    }

    // Menghapus data produk masuk
    public function destroy($id)
    {
        ProdukMasuk::destroy($id);
        return redirect()->route('produk-masuk.index')->with('success', 'Data berhasil dihapus.');
    }
}
