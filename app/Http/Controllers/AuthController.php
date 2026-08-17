<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Throwable;

class AuthController extends Controller
{
    /**
     * Show the admin login page.
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Handle admin login.
     */
    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => [
                    'required',
                    'email',
                ],

                'password' => [
                    'required',
                    'string',
                ],
            ]);

            if (Auth::attempt($credentials, $request->boolean('remember'))) {

                $request->session()->regenerate();

                return redirect()
                    ->intended(route('admin.leads'))
                    ->with('success', 'Welcome back.');
            }

            return back()
                ->withInput($request->only('email', 'remember'))
                ->withErrors([
                    'email' => 'The email or password is incorrect.',
                ]);
        } catch (Throwable $e) {

            Log::error('Admin login failed.', [
                'error' => $e->getMessage(),
                'ip' => $request->ip(),
            ]);

            return back()
                ->withInput($request->only('email', 'remember'))
                ->with(
                    'error',
                    'Something went wrong while logging in. Please try again.'
                );
        }
    }

    /**
     * Log the admin out.
     */
    public function logout(Request $request)
    {
        try {

            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()
                ->route('login')
                ->with('success', 'You have been logged out.');
        } catch (Throwable $e) {

            Log::error('Admin logout failed.', [
                'error' => $e->getMessage(),
                'ip' => $request->ip(),
            ]);

            return redirect()
                ->route('admin.leads')
                ->with(
                    'error',
                    'Something went wrong while logging out.'
                );
        }
    }
}
