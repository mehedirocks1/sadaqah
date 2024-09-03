@extends('frontend.Users.app')

@section('title', 'Profile')

@section('content')
    <div class="max-w-md mx-auto p-4 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Profile</h1>
        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <!-- Profile Form Fields -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input id="name" type="text" name="name" value="{{ Auth::user()->name }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            </div>
            <div class="mb-4">
                <label for="profile_picture" class="block text-gray-700">Profile Picture</label>
                <input id="profile_picture" type="file" name="profile_picture" class="mt-1 block w-full" />
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md">Update Profile</button>
        </form>
    </div>
@endsection
