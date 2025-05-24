@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Edit Supplier</h2>
        <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Supplier</label>
                <input type="text" name="nama" id="nama" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400" value="{{ $supplier->nama }}" required>
            </div>

            <div class="mb-4">
                <label for="no_hp" class="block text-sm font-medium text-gray-700 mb-1">No HP</label>
                <input type="text" name="no_hp" id="no_hp" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400" value="{{ $supplier->no_hp }}" required>
            </div>

            <div class="mb-6">
                <label for="keterangan" class="block text-sm font-medium text-gray-700 mb-1">Keterangan</label>
                <textarea name="keterangan" id="keterangan" rows="3" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400">{{ $supplier->keterangan }}</textarea>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('supplier.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-6 rounded-lg">Kembali</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 rounded-lg">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
