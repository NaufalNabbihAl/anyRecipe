<?php

namespace App\Http\Controllers;

use App\Models\User;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\auth\ResetPasswordRequest;
use App\Notifications\ResetPasswordNotification;
use App\Http\Requests\auth\ForgotPasswordRequest;

class AuthController extends Controller
{
    private $otp;
    public function login()
    {
        return view('auth.login');
    }

    public function loginAuth(Request $request)
    {
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('user.previous');
        } else {
            return redirect()->route('auth.login')->with('login_failed', true);
        }
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
            $request->only('name', 'email', 'password')
        );

        return redirect()->route('auth.login')->with('success', 'User created successfully');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }

    public function reset()
    {
        return view('auth.reset');
    }

    public function resetStore(ForgotPasswordRequest  $request)
    {
        $input = $request->input('email');
        $user = User::where('email', $input)->first();
        if ($user) {
            $user->notify(new ResetPasswordNotification());
            session()->put('email', $input);  
            return redirect()->route('auth.otp');
        }
        return redirect()->back()->withErrors(['email' => 'Email not found']);
    }

    public function otp(Request $request)
    {
        $email = session('email');

        return view('auth.otp', compact('email'));
    }
    public function __construct()
    {
        $this->otp = new Otp();
    }

    public function otpVerify(ResetPasswordRequest $request)
    {
        $otp = implode('', $request->input('otp'));


        $otp2 = $this->otp->validate($request->email, $otp);


        if (!$otp2->status) {
            return redirect()->route('auth.otp')->with('error', 'Kode OTP Salah');
        }
        session()->put('email', $request->email);

        return redirect()->route('auth.otp')->with('success', 'Kode OTP Benar');
    }

    public function newPassword()
    {
        $email = session('email');
        return view('auth.newPassword', compact('email'));
    }

    public function newPasswordStore(Request $request)
    {
        if ($request->password != $request->confirm_password) {
            return redirect()->route('auth.newPassword')->with('error', 'Password tidak sama');
        }

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);


        $email = session('email');

        $user = User::where('email', $email)->first();

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('auth.newPassword')->with('success', 'Password berhasil diubah');
    }


    public function confirmUserSuccess()
    {
        return view('auth.confirmUserSuccess');
    }

    
}
