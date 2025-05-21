@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Edit Produk Masuk</h2>

        <form action="{{ route('produk-masuk.update', $produk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="tanggal" class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" value="{{ $produk->tanggal }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400" required>
            </div>

            <div class="mb-4">
                <label for="kode_produk" class="block text-sm font-medium text-gray-700 mb-1">Kode Produk</label>
                <input type="text" name="kode_produk" id="kode_produk" value="{{ $produk->kode_produk }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400" required>
            </div>

            <div class="mb-4">
                <label for="nama_produk" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" value="{{ $produk->nama_produk }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400" required>
            </div>

            <div class="mb-4">
                <label for="jumlah_masuk" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Masuk</label>
                <input type="number" name="jumlah_masuk" id="jumlah_masuk" value="{{ $produk->jumlah_masuk }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400" required>
            </div>

            <div class="mb-4">
                <label for="harga_satuan" class="block text-sm font-medium text-gray-700 mb-1">Harga Satuan</label>
                <input type="number" name="harga_satuan" id="harga_satuan" value="{{ $produk->harga_satuan }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400" required>
            </div>

            <div class="mb-4">
                <label for="supplier" class="block text-sm font-medium text-gray-700 mb-1">Supplier</label>
                <input type="text" name="supplier" id="supplier" value="{{ $produk->supplier }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400" required>
            </div>

            <div class="mb-6">
                <label for="keterangan" class="block text-sm font-medium text-gray-700 mb-1">Keterangan</label>
                <textarea name="keterangan" id="keterangan" rows="3" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400">{{ $produk->keterangan }}</textarea>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('produk-masuk.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-6 rounded-lg">Kembali</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 rounded-lg">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
