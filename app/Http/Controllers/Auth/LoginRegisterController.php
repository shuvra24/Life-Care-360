<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Auth\Events\Registered;

class LoginRegisterController extends Controller
{
    /**
     * Instantiate a new LoginRegisterController instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'home']);
        $this->middleware('auth')->only(['logout', 'home']);
        $this->middleware('verified')->only('home');
    }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth.register'); // Ensure 'auth.register' matches the file's location
    }

    /**
     * Store a new user with a profile picture.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email:rfc,dns|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        // Handle profile picture upload
        $profilePic = 'default.png'; // Default profile picture
        if ($request->hasFile('profile_picture')) {
            $profilePic = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_picture' => $profilePic, // Store profile picture path
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('verification.notice');
    }

    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('welcome');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Display a home view for authenticated & verified users.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Log out the user from the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->with('success', 'You have successfully logged out!');
    }
}