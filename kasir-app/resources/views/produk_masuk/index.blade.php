@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4  ">
    <div class="card shadow-sm rounded-4 border-0 w-100" style="max-width: 1200px;">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold mb-0">Halaman Produk Masuk</h4>
                <a href="{{ route('produk-masuk.create') }}" class="btn btn-success rounded-3 px-4">
                    + Tambah Produk Masuk
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0">
                    <thead class="table-light text-center">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga Satuan</th>
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
                            <td>{{ $produk->supplier }}</td>
                            <td>{{ $produk->keterangan }}</td>
                            <td class="text-center">
                                <a href="{{ route('produk-masuk.edit', $produk->id) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                                <form action="{{ route('produk-masuk.destroy', $produk->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
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
