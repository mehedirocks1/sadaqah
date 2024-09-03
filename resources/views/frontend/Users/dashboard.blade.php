<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    @vite('resources/css/app.css') <!-- Include Tailwind CSS -->
    @vite('resources/js/app.js')  <!-- Include Vite JavaScript -->
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="hidden sm:block sm:ml-6">
                        <ul class="flex space-x-6">
                            <li><a href="{{ route('home') }}" class="hover:text-yellow-300 transition">Home</a></li>
                            <li><a href="{{ route('about') }}" class="hover:text-yellow-300 transition">About Us</a></li>
                            <li><a href="{{ route('donate') }}" class="hover:text-yellow-300 transition">Donate</a></li>
                            <li><a href="{{ route('contact') }}" class="hover:text-yellow-300 transition">Contact</a></li>

                            @auth
                                <li class="relative group">
                                    <!-- User's Name with Dropdown -->
                                    <span class="cursor-pointer hover:text-yellow-300 transition">{{ Auth::user()->name }}</span>
                                    <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                                        <form action="{{ route('logout') }}" method="POST" class="block">
                                            @csrf
                                            <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</button>
                                        </form>
                                    </div>
                                </li>
                            @else
                                <li><a href="{{ route('login') }}" class="hover:text-yellow-300 transition">Login</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="py-6">
        @yield('content')
    </main>

    @vite('resources/js/app.js')
</body>
</html>
