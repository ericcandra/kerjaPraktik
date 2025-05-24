@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4  ">
            
    <h1 class="text-2xl font-bold mb-6">Halaman Produk Masuk</h1>
    @auth
    <div class="mb-6">
        <a href="{{ route('produk-masuk.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-block">
            + Produk Masuk
        </a>
    </div>
    @endauth
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0">
                    <thead class="table-light text-center">
                        <tr>
                            <th>No</th>
                            <th>Tanggal Masuk</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Jumlah Masuk</th>
                            <th>Harga Satuan</th>
                            <th>Total Harga</th>
                            <th>Supplier</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($produkMasuk as $index => $produk)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $produk->tanggal }}</td>
                            <td>{{ $produk->kode_produk }}</td>
                            <td>{{ $produk->nama_produk }}</td>
                            <td class="text-end">{{ $produk->jumlah_masuk }}</td>
                            <td class="text-end">Rp{{ number_format($produk->harga_satuan, 0, ',', '.') }}</td>
                            <td class="text-end">Rp{{ number_format($produk->total_harga, 0, ',', '.') }}</td>
                            <td>{{ $produk->supplier->nama ?? '-' }}</td>
                            <td>{{ $produk->keterangan }}</td>
                            @auth
                            <td class="py-2 px-4 border-b flex gap-2">
                                <a href="{{ route('produk-masuk.edit', $produk->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white py-1 px-3 rounded text-xs">Edit</a>
                                <form action="{{ route('produk-masuk.destroy', $produk->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus pelanggan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded text-xs" type="submit">Hapus</button>
                                </form>
                            </td>
                            @endauth
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center text-muted py-3">Belum ada data produk masuk.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
