@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">

        {{-- Logo --}}
        <div class="flex justify-center mb-6">
            <img src="{{ asset('assets/images/logo_gupo.jpg') }}" alt="Logo" class="h-20 w-20 object-cover rounded-full">
        </div>

        <h2 class="text-2xl font-bold mb-6 text-center">Login ke Gupo Petshop</h2>

        @if(session('error'))
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="text" name="email" class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Login
            </button>
        </form>

        <div class="text-center mt-4">
            <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Belum punya akun? Daftar</a>
        </div>
    </div>
</div>
@endsection
