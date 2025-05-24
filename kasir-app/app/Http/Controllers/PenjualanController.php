<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Pelanggan;
use App\Models\Barang;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::with(['pelanggan', 'barang'])->latest()->get();
        return view('penjualan.index', compact('penjualans'));
    }

    public function create()
    {
        $pelanggans = Pelanggan::all();
        $barangs = Barang::all();
        return view('penjualan.create', compact('pelanggans', 'barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kode_transaksi' => 'required|string',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'barang_id' => 'required|exists:barang,id',
            'jumlah' => 'required|integer',
            'harga_satuan' => 'required|numeric',
            'diskon' => 'nullable|numeric|min:0|max:100',
            'metode_pembayaran' => 'required|string',
            'kasir' => 'required|string',
        ]);

        $total_harga = ($request->harga_satuan * $request->jumlah) - 
                       (($request->harga_satuan * $request->jumlah) * ($request->diskon / 100));

        Penjualan::create([
            'tanggal' => $request->tanggal,
            'kode_transaksi' => $request->kode_transaksi,
            'pelanggan_id' => $request->pelanggan_id,
            'barang_id' => $request->barang_id,
            'jumlah' => $request->jumlah,
            'harga_satuan' => $request->harga_satuan,
            'diskon' => $request->diskon ?? 0,
            'total_harga' => $total_harga,
            'metode_pembayaran' => $request->metode_pembayaran,
            'kasir' => $request->kasir,
        ]);

        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil ditambahkan.');
    }

    public function edit(Penjualan $penjualan)
    {
        $pelanggans = Pelanggan::all();
        $barangs = Barang::all();
        return view('penjualan.edit', compact('penjualan', 'pelanggans', 'barangs'));
    }

    public function update(Request $request, Penjualan $penjualan)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kode_transaksi' => 'required|string',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'barang_id' => 'required|exists:barang,id',
            'jumlah' => 'required|integer',
            'harga_satuan' => 'required|numeric',
            'diskon' => 'nullable|numeric|min:0|max:100',
            'metode_pembayaran' => 'required|string',
            'kasir' => 'required|string',
        ]);

        $total_harga = ($request->harga_satuan * $request->jumlah) - 
                       (($request->harga_satuan * $request->jumlah) * ($request->diskon / 100));

        $penjualan->update([
            'tanggal' => $request->tanggal,
            'kode_transaksi' => $request->kode_transaksi,
            'pelanggan_id' => $request->pelanggan_id,
            'barang_id' => $request->barang_id,
            'jumlah' => $request->jumlah,
            'harga_satuan' => $request->harga_satuan,
            'diskon' => $request->diskon ?? 0,
            'total_harga' => $total_harga,
            'metode_pembayaran' => $request->metode_pembayaran,
            'kasir' => $request->kasir,
        ]);

        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil diperbarui.');
    }

    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil dihapus.');
    }
}
