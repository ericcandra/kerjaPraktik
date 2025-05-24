@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-6xl bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Data Penjualan</h2>
        <div class="mb-4 text-right">
            <a href="{{ route('penjualan.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">+ Tambah Penjualan</a>
        </div>
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="overflow-x-auto">
            <table class="w-full table-auto border border-gray-300 text-sm">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Tanggal</th>
                        <th class="px-4 py-2">Kode Transaksi</th>
                        <th class="px-4 py-2">Nama Pelanggan</th>
                        <th class="px-4 py-2">Produk</th>
                        <th class="px-4 py-2">Jumlah</th>
                        <th class="px-4 py-2">Harga Satuan</th>
                        <th class="px-4 py-2">Diskon</th>
                        <th class="px-4 py-2">Total Harga</th>
                        <th class="px-4 py-2">Metode Pembayaran</th>
                        <th class="px-4 py-2">Kasir</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($penjualans as $index => $penjualan)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                        <td class="px-4 py-2">{{ $penjualan->tanggal }}</td>
                        <td class="px-4 py-2">{{ $penjualan->kode_transaksi }}</td>
                        <td class="px-4 py-2">{{ $penjualan->pelanggan->nama }}</td>
                        <td class="px-4 py-2">{{ $penjualan->barang->nama }}</td>
                        <td class="px-4 py-2">{{ $penjualan->jumlah }}</td>
                        <td class="px-4 py-2">{{ number_format($penjualan->harga_satuan, 0, ',', '.') }}</td>
                        <td class="px-4 py-2">{{ $penjualan->diskon }}%</td>
                        <td class="px-4 py-2">{{ number_format($penjualan->total_harga, 0, ',', '.') }}</td>
                        <td class="px-4 py-2">{{ $penjualan->metode_pembayaran }}</td>
                        <td class="px-4 py-2">{{ $penjualan->kasir }}</td>
                        @auth
                            <td class="py-2 px-4 border-b flex gap-2">
                                <a href="{{ route('penjualan.edit', $penjualan->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white py-1 px-3 rounded text-xs">Edit</a>
                                <form action="{{ route('penjualan.destroy', $penjualan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus pelanggan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded text-xs" type="submit">Hapus</button>
                                </form>
                            </td>
                            @endauth
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
