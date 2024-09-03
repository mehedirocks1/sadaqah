<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Authenticate the user
        $request->authenticate();
    
        // Regenerate session to prevent session fixation attacks
        $request->session()->regenerate();
    
        // Check the authenticated user's role
        $user = auth()->user();
    
        // Redirect based on the user's role
        if ($user->role === 'Admin') {
            // Redirect to admin home if the user is an admin
            return redirect()->route('admin.home');
        }elseif($user->role === 'User') {
            return redirect()->route('profile');
        }
    
        // Default redirect to dashboard for other roles
        return redirect()->intended(route('dashboard', absolute: false));
    }
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
