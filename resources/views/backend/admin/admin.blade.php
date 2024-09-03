<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    @vite('resources/css/app.css') <!-- Include Tailwind CSS -->
    @vite('resources/js/app.js')  <!-- Include Vite JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-W9mT7Ds5sRJ/zJ5dF/YT8O+Vs8zqFbh5H67w1zq9+o9K9U5pOT4uTo2MgVR7zG+HlPzmvD2a8kbrwp8WzW4PA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white min-h-screen">
            <div class="p-4">
                <h1 class="text-2xl font-bold mb-6">Admin Dashboard</h1>
                <ul>
                <li><a href="{{ route('admin.home') }}" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a></li>
<li><a href="{{ route('admin.users') }}" class="block px-4 py-2 hover:bg-gray-700">Users</a></li>
<li><a href="{{ route('admin.settings') }}" class="block px-4 py-2 hover:bg-gray-700">Settings</a></li>
<li class="mt-6"><span class="block px-4 py-2 font-semibold text-gray-400">Profile</span></li>
<li><a href="{{ route('admin.profile.edit') }}" class="block px-4 py-2 hover:bg-gray-700">Edit Profile</a></li>
<li><a href="{{ route('admin.profile.update') }}" class="block px-4 py-2 hover:bg-gray-700">Update Information</a></li>
<li><a href="{{ route('admin.profile.update-password') }}" class="block px-4 py-2 hover:bg-gray-700">Update Password</a></li>
<li><a href="{{ route('admin.profile.delete') }}" class="block px-4 py-2 hover:bg-gray-700">Delete Account</a></li>

                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
