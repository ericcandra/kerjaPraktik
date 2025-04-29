@extends('layouts.app')

@section('title', 'Kategori Produk')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-6">Halaman Kategori Produk</h1>
    @auth
    <div class="mb-6">
        <a href="{{ route('kategori.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-block">
            + Tambah Kategori
        </a>
    </div>
    @endauth
    
    @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

    <div class="overflow-x-auto">
        <table class="min-w-full md:w-2/3 bg-white shadow-md rounded my-6">
            <thead>
                <tr class="bg-gray-200 text-gray-600 sentences text-sm leading-normal">
                    <th class="py-3 px-6 text-left">No</th>
                    <th class="py-3 px-6 text-left">Kategori Produk</th>
                    <th class="py-3 px-6 text-left">Keterangan</th>
                    @auth
                    <th class="py-2 px-4 text-left">Aksi</th>
                    @endauth
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @forelse ($kategori as $item)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left">{{ $loop->iteration }}</td>
                        <td class="py-3 px-6 text-left">{{ $item->kategori }}</td>
                        <td class="py-3 px-6 text-left">{{ $item->keterangan }}</td>
                        @auth
                        <td class="py-3 px-6 text-left space-x-2">
                            <a href="{{ route('kategori.edit', $item->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white py-1 px-3 rounded text-sm">
                                Edit
                            </a>
                            
                            <form action="{{ route('kategori.destroy', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin mau hapus?')" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded text-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                        @endauth
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4">Data kategori belum ada</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
