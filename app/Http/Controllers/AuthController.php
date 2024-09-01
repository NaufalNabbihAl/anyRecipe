<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function create()
    {
        return view('auth.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm-password' => 'required|same:password',
        ]);

        User::create(
            $request->only('name', 'email','password')
        );

        return redirect()->route('auth.login')->with('success', 'User created successfully');
    }

    public function reset()
    {
        return view('auth.reset');
    }

    public function resetStore(Request $request)
    {
        
    }

    public function otp()
    {
        return view('auth.otp');
    }
    
    public function otpVerify(Request $request)
    {
        
    }
    
    public function newPassword(){
        return view('auth.newPassword');
    }

    public function confirmUserSuccess(){
        return view('auth.confirmUserSuccess');
    }
}
