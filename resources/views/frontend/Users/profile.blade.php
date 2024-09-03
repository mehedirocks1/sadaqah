@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-md">
    <h2 class="text-xl font-bold mb-4">Profile</h2>

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ Auth::user()->name }}" required>
        </div>

        <div class="mb-4">
            <label for="profile_picture" class="block text-gray-700">Profile Picture</label>
            <input type="file" name="profile_picture" id="profile_picture" class="mt-1 block w-full">
            @if (Auth::user()->profile_picture)
                <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture" class="mt-2 w-32 h-32 object-cover rounded-full">
            @endif
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update Profile</button>
    </form>

    <form action="{{ route('profile.delete') }}" method="POST" class="mt-4">
        @csrf
        @method('POST')
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Delete Account</button>
    </form>
</div>
@endsection
