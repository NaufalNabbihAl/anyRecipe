<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google') ->scopes(['profile', 'email'])->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('email', $googleUser->email)->first();

            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => Hash::make(rand(100000, 999999)),
                ]);
            }

            $credentials = Auth::login($user);

            if (Auth::attempt($credentials) && auth()->user()->category == null && auth()->user()->ingredients == null) {
                return redirect()->route('user.previous');
            } else if (Auth::attempt($credentials)) {
                return redirect()->route('user.dashboard');
            }
        } catch (\Exception $e) {
            
            return redirect('/login')->withErrors(['message' => 'Login failed or was cancelled. Please try again.']);
        }
    }
}
