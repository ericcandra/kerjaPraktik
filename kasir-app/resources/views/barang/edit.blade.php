@extends('layouts.app')
@section('title', 'Edit Produk')

@section('content')
<div class="container mt-4">
    <div class="bg-white p-6 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Edit Produk</h2>

        <form action="{{ route('barang.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="kode_barang" class="block font-semibold mb-1">Kode Barang</label>
                <input type="text" id="kode_barang" class="w-full border border-gray-300 rounded p-2" name="kode_barang" value="{{ old('kode_barang') }}" required>
            </div>

            <div class="mb-4">
                <label for="nama" class="block font-semibold mb-1">Nama Produk</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $barang->nama) }}" class="w-full border border-gray-300 rounded p-2" required>
            </div>

            <div class="mb-4">
                <label for="stok" class="block font-semibold mb-1">Stok</label>
                <input type="number" name="stok" id="stok" value="{{ old('stok', $barang->stok) }}" class="w-full border border-gray-300 rounded p-2" required>
            </div>

            <div class="mb-4">
                <label for="id_kategori" class="block font-semibold mb-1">Kategori</label>
                <select name="id_kategori" id="id_kategori" class="w-full border border-gray-300 rounded p-2" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}" {{ $barang->id_kategori == $item->id ? 'selected' : '' }}>{{ $item->kategori }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="id_satuan" class="block font-semibold mb-1">Satuan</label>
                <select name="id_satuan" id="id_satuan" class="w-full border border-gray-300 rounded p-2" required>
                    <option value="">-- Pilih Satuan --</option>
                    @foreach ($satuan as $item)
                        <option value="{{ $item->id }}" {{ $barang->id_satuan == $item->id ? 'selected' : '' }}>{{ $item->satuan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="harga" class="block font-semibold mb-1">Harga</label>
                <input type="number" name="harga" id="harga" value="{{ old('harga', $barang->harga) }}" class="w-full border border-gray-300 rounded p-2" step="0.01" required>
            </div>

            <div class="mb-4">
                <label for="keterangan" class="block font-semibold mb-1">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="w-full border border-gray-300 rounded p-2" rows="3">{{ old('keterangan', $barang->keterangan) }}</textarea>
            </div>

            <div class="flex justify-end gap-2">
                <a href="{{ route('barang.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded text-sm">Batal</a>
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded text-sm">Update</button>
            </div>

        </form>
    </div>
</div>
@endsection
