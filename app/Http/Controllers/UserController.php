<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Show registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 1, // Default role for new users
        ]);

        return redirect()->route('login');
    }

    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect based on role
            $user = Auth::user();
            if ($user->role_id === 1) { // User role
                return redirect()->route('user.dashboard');
            } elseif ($user->role_id === 2) { // Admin role
                return redirect()->route('admin.home');
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Show user dashboard
    public function showDashboard()
    {
        return view('frontend.Users.dashboard');// Adjust path to your dashboard view
    }

    // Show user profile
    public function showProfile()
    {
        return view('frontend.Users.profile'); // Adjust path to your profile view
    }

    // Update user profile
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|max:2048',
        ]);

        $user->name = $request->name;

        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $profilePicturePath;
        }

        $user->save();

        return redirect()->route('user.profile');
    }

    // Delete user account
    public function deleteAccount(Request $request)
    {
        $user = Auth::user();
        $user->delete();

        Auth::logout();
        return redirect('/');
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
