<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sadaqah - Donation</title>
    @vite('resources/css/app.css') <!-- Assuming you are using Vite for CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body class="font-roboto bg-gray-50">
    <header class="bg-blue-800 text-white py-6 shadow-md">
        <div class="container mx-auto flex justify-between items-center px-6">
            <h1 class="text-3xl font-bold">Sadaqah</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="{{ route('home') }}" class="hover:text-yellow-300 transition">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-yellow-300 transition">About Us</a></li>
                    <li><a href="{{ route('donate') }}" class="hover:text-yellow-300 transition">Donate</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-yellow-300 transition">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- Swiper -->
        <div class="swiper-container my-8">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('img/frontend/slide1.jpg') }}" alt="Slide 1" class="w-full h-auto">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('img/frontend/slide2.jpg') }}" alt="Slide 2" class="w-full h-auto">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('img/frontend/slide3.jpg') }}" alt="Slide 3" class="w-full h-auto">
                </div>
                <!-- Add more slides as needed -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        @yield('content')
    </main>

    <footer class="bg-blue-800 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Sadaqah. All rights reserved.</p>
        </div>
    </footer>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
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
