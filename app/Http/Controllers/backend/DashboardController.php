<?php
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.admin.dashboard');
    }

    public function users()
    {
        return view('backend.admin.users');
    }

    public function settings()
    {
        return view('backend.admin.settings');
    }

    public function editProfile()
    {
        // Load the current user data for editing
        $user = Auth::user();
        return view('backend.admin.edit', compact('user'));
    }

    public function updateProfileInformation(Request $request)
    {
        // Validate and update the user's profile information
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('admin.profile.edit')->with('status', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        // Validate and update the user's password
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return redirect()->route('admin.profile.edit')->with('status', 'Password updated successfully.');
    }

    public function deleteUser(Request $request)
    {
        // Confirm and delete the user account
        $request->validate([
            'password' => 'required',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->input('password'), $user->password)) {
            return redirect()->back()->withErrors(['password' => 'Password is incorrect.']);
        }

        $user->delete();

        return redirect()->route('admin.home')->with('status', 'Account deleted successfully.');
    }
}
