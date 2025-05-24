<?php

namespace App\Http\Controllers;

use App\Models\ProdukMasuk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProdukMasukController extends Controller
{
    public function index()
    {
        $produkMasuk = ProdukMasuk::with('supplier')->get();
        return view('produk-masuk.index', compact('produkMasuk'));
    }

    public function create()
    {
        $suppliers = Supplier::all();
        return view('produk-masuk.create', compact('suppliers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tanggal' => 'required|date',
            'kode_produk' => 'required|string',
            'nama_produk' => 'required|string',
            'jumlah_masuk' => 'required|integer',
            'harga_satuan' => 'required|integer',
            'supplier_id' => 'required|exists:suppliers,id',
            'keterangan' => 'nullable|string',
        ]);

        $data['total_harga'] = $data['jumlah_masuk'] * $data['harga_satuan'];

        ProdukMasuk::create($data);
        return redirect()->route('produk-masuk.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(ProdukMasuk $produkMasuk)
    {
        $suppliers = Supplier::all();
        return view('produk-masuk.edit', compact('produkMasuk', 'suppliers'));
    }

    public function update(Request $request, ProdukMasuk $produkMasuk)
    {
        $data = $request->validate([
            'tanggal' => 'required|date',
            'kode_produk' => 'required|string',
            'nama_produk' => 'required|string',
            'jumlah_masuk' => 'required|integer',
            'harga_satuan' => 'required|integer',
            'supplier_id' => 'required|exists:suppliers,id',
            'keterangan' => 'nullable|string',
        ]);

        $data['total_harga'] = $data['jumlah_masuk'] * $data['harga_satuan'];

        $produkMasuk->update($data);
        return redirect()->route('produk-masuk.index')->with('success', 'Data berhasil diubah');
    }

    // 🔻 Method untuk menghapus data produk masuk
    public function destroy(ProdukMasuk $produkMasuk)
    {
        $produkMasuk->delete();
        return redirect()->route('produk-masuk.index')->with('success', 'Data berhasil dihapus');
    }
}
