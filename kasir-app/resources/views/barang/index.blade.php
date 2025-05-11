@extends('layouts.app')
@section('title', 'Produk')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-6">Halaman Produk</h1>
    @auth
    <div class="mb-6">
        <a href="{{ route('barang.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-block">
            + Barang
        </a>
    </div>
    @endauth

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded shadow-sm">
                <thead class="bg-blue-500 text-black">
                    <tr>
                        <th class="py-3 px-4 border-b">No</th>
                        <th class="py-3 px-4 border-b">Kode Barang</th>
                        <th class="py-3 px-4 border-b">Nama Produk</th>
                        <th class="py-3 px-4 border-b">Kategori</th>
                        <th class="py-3 px-4 border-b">Stok</th>
                        <th class="py-3 px-4 border-b">Satuan</th>
                        <th class="py-3 px-4 border-b">Harga</th>
                        <th class="py-3 px-4 border-b">Keterangan</th>
                        @auth
                        <th class="py-3 px-4 border-b">Aksi</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @forelse ($barang as $item)
                        <tr class="hover:bg-gray-100 text-center">
                            <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->kode_barang }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->nama }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->kategori->kategori ?? '-' }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->stok }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->satuan->satuan ?? '-' }}</td>
                            <td class="py-2 px-4 border-b">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->keterangan }}</td>
                            @auth
                            <td class="py-2 px-4 border-b flex justify-center gap-2">
                                <a href="{{ route('barang.edit', $item->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white py-1 px-3 rounded text-xs">Edit</a>
                                <form action="{{ route('barang.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded text-xs" type="submit">Hapus</button>
                                </form>
                            </td>
                            @endauth
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-6 text-gray-500">Belum ada data produk</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
