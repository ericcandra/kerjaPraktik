<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@extends('layouts.app2')

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-md">
        <a href="/forgot-password" class="back-home-button">
            <span class="pc-micon"><i class="fa fa-arrow-left"></i></span>
        </a>
        <h2 class="text-xl font-bold mb-4 text-center">Ubah Password</h2>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.update.simple') }}">
            @csrf

            <input type="hidden" name="email" value="{{ $email }}">

            <div class="mb-4">
                <label>Password Baru</label>
                <input type="password" name="password" required class="w-full p-2 border rounded" placeholder="masukkan password baru anda">
            </div>

            <div class="mb-6">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required class="w-full p-2 border rounded" placeholder="ulangi lagi">
            </div>

            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded">Ubah Password</button>
        </form>
    </div>
</div>
@endsection
