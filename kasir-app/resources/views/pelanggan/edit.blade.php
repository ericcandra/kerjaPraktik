@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Ubah Pelanggan</h2>

        <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Pelanggan</label>
                <input type="text" name="nama" id="nama" value="{{ $pelanggan->nama }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400" required>
            </div>

            <div class="mb-6">
                <label for="nomor_hp" class="block text-sm font-medium text-gray-700 mb-1">Nomor HP</label>
                <input type="text" name="nomor_hp" id="nomor_hp" value="{{ $pelanggan->nomor_hp }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400" required>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('pelanggan.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-6 rounded-lg">Kembali</a>
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-2 px-6 rounded-lg">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
