@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h4>Tambah Produk Masuk</h4>
    <div class="card mt-3">
        <div class="card-body">
            <form action="{{ route('produk-masuk.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label>Kode Produk</label>
                        <input type="text" name="kode_produk" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label>Jumlah Masuk</label>
                        <input type="number" name="jumlah_masuk" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Harga Satuan</label>
                        <input type="number" name="harga_satuan" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label>Supplier</label>
                        <input type="text" name="supplier" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Keterangan</label>
                    <textarea name="keterangan" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('produk-masuk.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
