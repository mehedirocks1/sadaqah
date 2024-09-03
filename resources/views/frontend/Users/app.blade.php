<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    @vite('resources/css/app.css') <!-- Include Tailwind CSS -->
    @vite('resources/js/app.js')  <!-- Include Vite JavaScript -->
    <style>
        /* Additional custom styles if needed */
    </style>
</head>
<body class="bg-gray-100 text-gray-900 flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg h-screen fixed top-0 left-0">
        <div class="p-6">
            <h2 class="text-2xl font-semibold mb-4">Dashboard</h2>
            <ul>
                <li><a href="{{ route('user.dashboard') }}" class="block py-2 px-4 hover:bg-gray-200">Dashboard</a></li>
                <li><a href="{{ route('profile') }}" class="block py-2 px-4 hover:bg-gray-200">Profile</a></li>
                <li>
                    <form action="{{ route('profile.delete') }}" method="POST" class="block py-2 px-4 hover:bg-gray-200">
                        @csrf
                        @method('POST')
                        <button type="submit" class="w-full text-left">Delete Account</button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 ml-64 p-6">
        <nav class="bg-white shadow-md mb-6">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="hidden sm:block sm:ml-6">
                            <ul class="flex space-x-6">
                                <li><a href="{{ route('home') }}" class="hover:text-yellow-300 transition">Home</a></li>
                                <li><a href="{{ route('about') }}" class="hover:text-yellow-300 transition">About Us</a></li>
                                <li><a href="{{ route('donate') }}" class="hover:text-yellow-300 transition">Donate</a></li>
                                <li><a href="{{ route('contact') }}" class="hover:text-yellow-300 transition">Contact</a></li>

                                @auth
                                    <li class="relative group">
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

        <main>
            @yield('content')
        </main>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
