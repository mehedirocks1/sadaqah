@extends('frontend.layout')

@section('content')
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-6">Contact Us</h2>
            <p class="text-lg text-center mb-8">
                We are here to help and answer any questions you may have. Feel free to reach out to us through the contact form below or via email.
            </p>
            <form action="#" method="POST" class="max-w-md mx-auto bg-gray-100 p-6 rounded-lg shadow-md">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name" class="mt-1 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your email" class="mt-1 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-lg font-medium text-gray-700">Message</label>
                    <textarea name="message" id="message" rows="4" placeholder="Your message" class="mt-1 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-lg text-lg font-semibold hover:bg-blue-700 transition">Send Message</button>
            </form>
        </div>
    </section>
@endsection
