@extends('layouts.app2')

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Daftar Akun Baru</h2>

        @if(session('error'))
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register.post') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700">Nama Lengkap</label>
                <input type="text" name="name" class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            {{-- <div class="mb-4">
                <label class="block text-gray-700">Username</label>
                <input type="text" name="username" class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div> --}}

            <div class="mb-6">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                Daftar
            </button>
        </form>

        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Sudah punya akun? Login</a>
        </div>
    </div>
</div>
@endsection
