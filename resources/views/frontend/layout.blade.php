<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sadaqah - Donation</title>
    @vite('resources/css/app.css') <!-- Assuming you are using Vite for CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body class="font-roboto bg-gray-50">
    <header class="bg-blue-800 text-white py-6 shadow-md">
        <div class="container mx-auto flex justify-between items-center px-6">
            <h1 class="text-3xl font-bold">Sadaqah</h1>
            <nav>
    <ul class="flex space-x-6">
        <li><a href="#" class="hover:text-yellow-300 transition">Home</a></li>
        <li><a href="#" class="hover:text-yellow-300 transition">About Us</a></li>
        <li><a href="#" class="hover:text-yellow-300 transition">Donate</a></li>
        <li><a href="#" class="hover:text-yellow-300 transition">Contact</a></li>

        @auth
            <li class="relative group">
                <!-- User's Name with Dropdown -->
                <span class="cursor-pointer hover:text-yellow-300 transition">{{ Auth::user()->name }}</span>
                <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10">
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
</nav>

        </div>
    </header>

    <main>
        <!-- Swiper with Adjusted Height -->




        <!--Here Put Swiper Code -->

        <!-- Latest Causes Section -->
        <section class="bg-white py-12">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-green-700 mb-8 text-center">Latest Causes</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Cause Block -->
                    <div class="bg-green-100 p-4 rounded-lg shadow-md">
                        <img src="https://via.placeholder.com/400x300" alt="Cause 1" class="w-full h-48 object-cover rounded-md mb-4">
                        <h3 class="text-2xl font-semibold text-green-800 mb-2">Cause Title 1</h3>
                        <p class="text-gray-600 mb-4">Short description about the cause. Help us make a difference.</p>
                        <a href="#" class="bg-green-600 text-white px-4 py-2 rounded">Donate Now</a>
                    </div>
                    <!-- Repeat this block for other causes -->
                    <div class="bg-green-100 p-4 rounded-lg shadow-md">
                        <img src="https://via.placeholder.com/400x300" alt="Cause 2" class="w-full h-48 object-cover rounded-md mb-4">
                        <h3 class="text-2xl font-semibold text-green-800 mb-2">Cause Title 2</h3>
                        <p class="text-gray-600 mb-4">Short description about the cause. Help us make a difference.</p>
                        <a href="#" class="bg-green-600 text-white px-4 py-2 rounded">Donate Now</a>
                    </div>
                    <!-- Add more blocks as necessary for the total of 8 -->
                </div>
            </div>
        </section>


<!-- Latest Blogs Section -->
<section class="bg-white py-12">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-green-700 mb-8 text-center">Latest Blogs</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Blog Card -->
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/400x250" alt="Blog 1" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-2xl font-semibold text-green-800 mb-2">Blog Title 1</h3>
                <p class="text-gray-600 mb-4">A brief description of the blog post. Catch your reader's attention here.</p>
                <a href="#" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Read More</a>
            </div>

            <!-- Repeat Blog Card for other blogs -->
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/400x250" alt="Blog 2" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-2xl font-semibold text-green-800 mb-2">Blog Title 2</h3>
                <p class="text-gray-600 mb-4">A brief description of the blog post. Catch your reader's attention here.</p>
                <a href="#" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Read More</a>
            </div>

            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/400x250" alt="Blog 3" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-2xl font-semibold text-green-800 mb-2">Blog Title 3</h3>
                <p class="text-gray-600 mb-4">A brief description of the blog post. Catch your reader's attention here.</p>
                <a href="#" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Read More</a>
            </div>

            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/400x250" alt="Blog 4" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-2xl font-semibold text-green-800 mb-2">Blog Title 4</h3>
                <p class="text-gray-600 mb-4">A brief description of the blog post. Catch your reader's attention here.</p>
                <a href="#" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Read More</a>
            </div>
        </div>
    </div>
</section>




        <!-- Why Choose Us Section -->
        <section class="bg-green-50 py-12">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-green-700 mb-8 text-center">Why Choose Us</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4">
                        <i class="fas fa-hand-holding-heart text-green-700 text-4xl"></i>
                        <div>
                            <h3 class="text-2xl font-semibold text-green-800">Trustworthy</h3>
                            <p class="text-gray-600">We ensure that your donations reach those in need efficiently.</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4">
                        <i class="fas fa-hands-helping text-green-700 text-4xl"></i>
                        <div>
                            <h3 class="text-2xl font-semibold text-green-800">Community Support</h3>
                            <p class="text-gray-600">Join a community dedicated to making a positive impact.</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4">
                        <i class="fas fa-shield-alt text-green-700 text-4xl"></i>
                        <div>
                            <h3 class="text-2xl font-semibold text-green-800">Secure Donations</h3>
                            <p class="text-gray-600">Your donations are secure with our reliable payment gateways.</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4">
                        <i class="fas fa-chart-line text-green-700 text-4xl"></i>
                        <div>
                            <h3 class="text-2xl font-semibold text-green-800">Proven Impact</h3>
                            <p class="text-gray-600">We provide transparency on how your donations are utilized.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @yield('content')
    </main>

    <footer class="bg-blue-800 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Sadaqah. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 5000,
            },
        });
    </script>
</body>
</html>
