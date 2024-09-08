<?php

namespace App\Http\Controllers;

use App\Models\Ingredients;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function previous()
    {
        return view('user.previous');
    }
    public function dashboard()
    {
        return view('user.dashboard');
    }
    public function search()
    {
        $ingredients = Ingredients::orderBy('name')->get();
        return view('user.search',compact('ingredients'));
    }
    public function selected()
    {
        return view('user.selected');
    }
    public function found()
    {
        return view('user.found');
    }
    public function upload()
    {
        return view('user.upload');
    }

    public function setting()
    {
        $user = auth()->user();
        return view('user.setting', compact('user'));
    }
    public function deleteUser($id)
    {
        User::destroy($id);
        return redirect()->route('home');
    }

    public function changeNamePassword()
    {
        return view('user.changeNamePassword');
    }
}
