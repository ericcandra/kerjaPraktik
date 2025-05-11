<?php

// app/Http/Controllers/BarangController.php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\KategoriBarang;
use App\Models\Satuan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::with('kategori', 'satuan')->get();
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        $kategori = KategoriBarang::all();
        $satuan = Satuan::all();
        return view('barang.create', compact('kategori', 'satuan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|string|unique:barang,kode_barang',
            'id_kategori' => 'required',
            'nama' => 'required|string',
            'stok' => 'required|integer',
            'id_satuan' => 'required',
            'harga' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Barang $barang)
    {
        $kategori = KategoriBarang::all();
        $satuan = Satuan::all();
        return view('barang.edit', compact('barang', 'kategori', 'satuan'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'kode_barang' => 'required|string|unique:barang,kode_barang,' . $barang->id,
            'id_kategori' => 'required',
            'nama' => 'required|string',
            'stok' => 'required|integer',
            'id_satuan' => 'required',
            'harga' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Produk berhasil dihapus');
    }
}
