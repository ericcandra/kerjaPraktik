@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-6">Tambah Produk Masuk</h1>

    <form action="{{ route('produk-masuk.store') }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block text-sm font-medium mb-1" for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="kode_produk">Kode Produk</label>
                <input type="text" name="kode_produk" id="kode_produk" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="jumlah_masuk">Jumlah Masuk</label>
                <input type="number" name="jumlah_masuk" id="jumlah_masuk" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="harga_satuan">Harga Satuan</label>
                <input type="number" name="harga_satuan" id="harga_satuan" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="supplier">Supplier</label>
                <input type="text" name="supplier" id="supplier" class="w-full border rounded p-2" required>
            </div>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1" for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" rows="3" class="w-full border rounded p-2"></textarea>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('produk-masuk.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-6 rounded">Kembali</a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 rounded">Simpan</button>
        </div>
    </form>
</div>
@endsection
