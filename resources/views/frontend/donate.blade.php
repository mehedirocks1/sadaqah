@extends('frontend.layout')

@section('content')
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-6">Make a Donation</h2>
            <p class="text-lg text-center mb-8">
                Your contributions help us provide essential support and services to those in need. Choose an amount to donate and make a difference today.
            </p>
            <form action="#" method="POST" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
                @csrf
                <div class="mb-4">
                    <label for="amount" class="block text-lg font-medium text-gray-700">Donation Amount</label>
                    <input type="number" name="amount" id="amount" placeholder="Enter amount" class="mt-1 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-lg font-medium text-gray-700">Message (optional)</label>
                    <textarea name="message" id="message" rows="4" placeholder="Leave a message" class="mt-1 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-lg text-lg font-semibold hover:bg-blue-700 transition">Donate Now</button>
            </form>
        </div>
    </section>
@endsection
