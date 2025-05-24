@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-6">Halaman Supplier</h1>
    @auth
    <div class="mb-6">
        <a href="{{ route('supplier.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-block">
            + Supplier
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($suppliers as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->keterangan }}</td>
                        @auth
                            <td class="py-2 px-4 border-b flex gap-2">
                                <a href="{{ route('supplier.edit', $item->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white py-1 px-3 rounded text-xs">Edit</a>
                                <form action="{{ route('supplier.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                    @csrf
                                    {{-- @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded text-xs" type="submit">Hapus</button> --}}
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
