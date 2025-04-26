<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Gupo Petshop' }}</title>
    <script src="https://cdn.tailwindcss.com"></script> {{-- TailwindCSS CDN --}}
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    {{-- Navbar --}}
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/logo_gupo.jpg') }}" alt="Logo" class="h-20 w-20 object-cover rounded-full">
                <span class="font-bold text-xl text-gray-800">Gupo Petshop</span>
            </div>

            <div>
                @auth
                    <a href="{{ route('logout') }}" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">Logout</a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900 mr-4">Login</a>
                    <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main class="flex-1">
        @yield('content')
    </main>

</body>
</html>
