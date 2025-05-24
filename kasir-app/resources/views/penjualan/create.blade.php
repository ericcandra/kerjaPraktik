@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">+ Tambah Penjualan</h2>

        <form action="{{ route('penjualan.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium mb-1">Tanggal</label>
                <input type="date" name="tanggal" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Kode Transaksi</label>
                <input type="text" name="kode_transaksi" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Nama Pelanggan</label>
                <select name="pelanggan_id" class="w-full border rounded p-2" required>
                    <option value="">-- Pilih Pelanggan --</option>
                    @foreach($pelanggans as $pelanggan)
                        <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Produk</label>
                <select name="barang_id" class="w-full border rounded p-2" required>
                    <option value="">-- Pilih Produk --</option>
                    @foreach($barangs as $barang)
                        <option value="{{ $barang->id }}">{{ $barang->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Jumlah</label>
                <input type="number" name="jumlah" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Harga Satuan</label>
                <input type="number" name="harga_satuan" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Diskon (%)</label>
                <input type="number" name="diskon" class="w-full border rounded p-2" value="0">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Metode Pembayaran</label>
                <input type="text" name="metode_pembayaran" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Kasir</label>
                <input type="text" name="kasir" class="w-full border rounded p-2" required>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('penjualan.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-6 rounded-lg">Kembali</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 rounded-lg">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
