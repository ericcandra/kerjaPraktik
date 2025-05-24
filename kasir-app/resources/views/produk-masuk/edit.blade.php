@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Ubah Produk Masuk</h2>

        <form action="{{ route('produk-masuk.update', $produkMasuk->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium mb-1" for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" value="{{ $produkMasuk->tanggal }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1" for="kode_produk">Kode Produk</label>
                <input type="text" name="kode_produk" id="kode_produk" value="{{ $produkMasuk->kode_produk }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1" for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" value="{{ $produkMasuk->nama_produk }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1" for="jumlah_masuk">Jumlah Masuk</label>
                <input type="number" name="jumlah_masuk" id="jumlah_masuk" value="{{ $produkMasuk->jumlah_masuk }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1" for="harga_satuan">Harga Satuan</label>
                <input type="number" name="harga_satuan" id="harga_satuan" value="{{ $produkMasuk->harga_satuan }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1" for="supplier_id">Supplier</label>
                <select name="supplier_id" id="supplier_id" class="w-full border rounded p-2" required>
                    <option value="">-- Pilih Supplier --</option>
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}" {{ $produkMasuk->supplier_id == $supplier->id ? 'selected' : '' }}>
                            {{ $supplier->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1" for="keterangan">Keterangan</label>
                <textarea name="keterangan" id="keterangan" rows="3" class="w-full border rounded p-2">{{ $produkMasuk->keterangan }}</textarea>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('produk-masuk.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-6 rounded">Kembali</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 rounded">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
