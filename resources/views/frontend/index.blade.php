@extends('frontend.layout')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('content')
    <section class="bg-gradient-to-r from-blue-500 to-teal-500 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-extrabold text-white mb-6">Welcome to Sadaqah</h2>
            <p class="text-xl text-white mb-8">Your generous donations make a big difference. Join us in making the world a better place.</p>
            <a href="#donate" class="bg-yellow-500 text-white py-3 px-6 rounded-lg text-lg font-semibold hover:bg-yellow-600 transition">Donate Now</a>
        </div>
    </section>

    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h3 class="text-4xl font-bold mb-6">About Us</h3>
            <p class="text-lg mb-6">Sadaqah is dedicated to helping those in need. Learn more about our mission and how your contributions help.</p>
            <a href="#" class="text-blue-600 hover:underline text-lg">Read More</a>
        </div>
    </section>

    <section id="donate" class="bg-gray-100 py-16">
        <div class="container mx-auto text-center">
            <h3 class="text-4xl font-bold mb-6">Make a Donation</h3>
            <p class="text-lg mb-6">Your support is crucial to our success. Choose an amount to donate and make a positive impact today.</p>
            <form action="#" method="POST" class="flex flex-col items-center space-y-4">
                <input type="number" name="amount" placeholder="Enter amount" class="p-3 border border-gray-300 rounded-md w-64 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-lg text-lg font-semibold hover:bg-blue-700 transition">Donate Now</button>
            </form>
        </div>
    </section>

    <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h3 class="text-4xl font-bold mb-6">Contact Us</h3>
            <p class="text-lg mb-6">Have questions or need assistance? Reach out to us and we'll be happy to help.</p>
            <a href="mailto:info@sadaqah.org" class="text-blue-600 hover:underline text-lg">Email Us</a>
        </div>
    </section>
@endsection
