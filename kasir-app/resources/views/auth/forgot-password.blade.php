<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@extends('layouts.app2')

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-md">
        <a href="/login" class="back-home-button">
            <span class="pc-micon"><i class="fa fa-arrow-left"></i></span>
        </a>
        <h2 class="text-xl font-bold mb-4 text-center">Lupa Password</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.check') }}">
            @csrf

            <div class="mb-4">
                <label>Email</label>
                <input type="email" name="email" required class="w-full p-2 border rounded" placeholder="masukkan email">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">Cek Email</button>
        </form>
    </div>
</div>
@endsection
