@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-lg mx-auto">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Tambah Kategori Produk</h2>

        <form action="{{ route('kategori.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="kategori" class="block text-gray-700 font-semibold mb-2">Nama Kategori</label>
                <input type="text" id="kategori" name="kategori" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400 p-2" placeholder="Masukkan Nama Kategori" required>
            </div>

            <div>
                <label for="keterangan" class="block text-gray-700 font-semibold mb-2">Keterangan</label>
                <textarea id="keterangan" name="keterangan" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400 p-2" rows="3" placeholder="Masukkan Keterangan"></textarea>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('kategori.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-md">Kembali</a>
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
