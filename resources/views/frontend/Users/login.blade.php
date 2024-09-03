@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-md">
    <h2 class="text-xl font-bold mb-4">Login</h2>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('email') }}" required autofocus>
            @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('password')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <input type="checkbox" name="remember" id="remember" class="mr-2">
            <label for="remember" class="text-gray-700">Remember Me</label>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Login</button>
    </form>
</div>
@endsection
