<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    /**
     * Handle login request.
     */
    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
// dd($user->role );
            // Check if the user is an admin
            if ($user->role === 'admin') {
                return redirect()->route('dashboard')->with('success', 'Welcome Admin!');
            }

            // Logout non-admin users
            Auth::logout();
            return redirect()->route('admin.login')->withErrors(['email' => 'Unauthorized access!']);
        }

        return back()->withErrors(['email' => 'Invalid login credentials!']);
    }
    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $value = ['email'=>$request->email,'password'=>$request->password];

        // Create a new user
        if(!Auth::attempt($value)){
            User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'email_verified_at' => now(),
                        'password' => $request->password, // Hash the password before saving
                        'role' => 'admin',
                        'remember_token' => Str::random(10)

                    ]);
        }

        return redirect()->route('admin.login')->with('success', 'Registration successful! Login Now!');
    }
    /**
     * Handle logout request.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'Logged out successfully!');
    }
}
