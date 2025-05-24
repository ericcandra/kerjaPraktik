@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Ubah Penjualan</h2>

        <form action="{{ route('penjualan.update', $penjualan->id) }}" method="POST" class="bg-white p-6 rounded shadow">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium mb-1" for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" value="{{ $penjualan->tanggal }}" class="w-full border rounded p-2" required>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1" for="kode_transaksi">Kode Transaksi</label>
                    <input type="text" name="kode_transaksi" id="kode_transaksi" value="{{ $penjualan->kode_transaksi }}" class="w-full border rounded p-2" required>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1" for="pelanggan_id">Nama Pelanggan</label>
                    <select name="pelanggan_id" id="pelanggan_id" class="w-full border rounded p-2" required>
                        <option value="">-- Pilih Pelanggan --</option>
                        @foreach($pelanggans as $pelanggan)
                            <option value="{{ $pelanggan->id }}" {{ $penjualan->pelanggan_id == $pelanggan->id ? 'selected' : '' }}>
                                {{ $pelanggan->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1" for="barang_id">Produk</label>
                    <select name="barang_id" id="barang_id" class="w-full border rounded p-2" required>
                        <option value="">-- Pilih Produk --</option>
                        @foreach($barangs as $barang)
                            <option value="{{ $barang->id }}" {{ $penjualan->barang_id == $barang->id ? 'selected' : '' }}>
                                {{ $barang->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1" for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah" value="{{ $penjualan->jumlah }}" class="w-full border rounded p-2" required>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1" for="harga_satuan">Harga Satuan</label>
                    <input type="number" name="harga_satuan" id="harga_satuan" value="{{ $penjualan->harga_satuan }}" class="w-full border rounded p-2" required>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1" for="diskon">Diskon (%)</label>
                    <input type="number" name="diskon" id="diskon" value="{{ $penjualan->diskon }}" class="w-full border rounded p-2" min="0" max="100">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1" for="metode_pembayaran">Metode Pembayaran</label>
                    <input type="text" name="metode_pembayaran" id="metode_pembayaran" value="{{ $penjualan->metode_pembayaran }}" class="w-full border rounded p-2" required>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1" for="kasir">Kasir</label>
                    <input type="text" name="kasir" id="kasir" value="{{ $penjualan->kasir }}" class="w-full border rounded p-2" required>
                </div>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('penjualan.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-6 rounded-lg">Kembali</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 rounded-lg">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
