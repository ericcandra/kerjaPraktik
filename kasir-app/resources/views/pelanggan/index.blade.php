@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-6">Data Pelanggan</h1>
    @auth
    <div class="mb-6">
        <a href="{{ route('pelanggan.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-block">
            + Pelanggan
        </a>
    </div>
    @endauth

    @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nomor HP</th>
                        @auth
                        <th>Aksi</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @forelse($pelanggans as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nomor_hp }}</td>
                            @auth
                            <td class="py-2 px-4 border-b flex gap-2">
                                <a href="{{ route('pelanggan.edit', $item->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white py-1 px-3 rounded text-xs">Edit</a>
                                <form action="{{ route('pelanggan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus pelanggan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded text-xs" type="submit">Hapus</button>
                                </form>
                            </td>
                            @endauth
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada data pelanggan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
