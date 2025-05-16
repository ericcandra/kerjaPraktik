@extends('layouts.app2')

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <div class="bg-yellow p-8 rounded shadow-md w-full max-w-md">
        <a href="{{ route('login') }}" class="back-home-button mb-4 inline-block text-gray-600 hover:text-gray-800">
            <i class="fa fa-arrow-left mr-2"></i> Kembali ke Login
        </a>

        {{-- Logo --}}
        <div class="flex justify-center mb-6">
            <img src="{{ asset('assets/images/logo_gupo.jpg') }}" alt="Logo" class="h-20 w-20 object-cover rounded-full">
        </div>

        <h2 class="text-2xl font-bold mb-4 text-center">Reset Password</h2>
        <p class="text-sm text-gray-600 text-center mb-6">
            Masukkan email kamu dan kami akan mengirimkan link untuk mengganti password.
        </p>

        @if (session('status'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Kirim Link Reset Password
            </button>
        </form>
    </div>
</div>
@endsection
