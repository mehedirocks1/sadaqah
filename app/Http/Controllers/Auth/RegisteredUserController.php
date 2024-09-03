<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
{
    // Validate the incoming request data
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    // Create a new user and assign the default role as 'User'
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'User', // Assign default role
    ]);

    // Fire the Registered event
    event(new Registered($user));

    // Log the user in immediately after registration
    Auth::login($user);

    // Role-based redirection
    if (Auth::user()->role === 'Admin') {
        // Redirect admin users to the admin home/dashboard
        return redirect()->route('admin.home');
    } elseif (Auth::user()->role === 'User') {
        // Redirect regular users to their profile page
        return redirect()->route('profile');
    }

    // Fallback redirect if the role doesn't match
    return redirect()->route('dashboard');
}
}
