<?php

namespace App\Http\Controllers;

use App\Models\ProdukMasuk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProdukMasukController extends Controller
{
    public function index()
    {
        $data = ProdukMasuk::with('supplier')->get();
        return view('produk-masuk.index', compact('data'));
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

    public function edit(ProdukMasuk $produkmasuk)
    {
        $suppliers = Supplier::all();
        return view('produk-masuk.edit', compact('produkmasuk', 'suppliers'));
    }

    public function update(Request $request, ProdukMasuk $produkmasuk)
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

        $produkmasuk->update($data);
        return redirect()->route('produkmasuk.index')->with('success', 'Data berhasil diubah');
    }
}

