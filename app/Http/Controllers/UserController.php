<?php

namespace App\Http\Controllers;


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
        return view('user.search');
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
        return view('user.setting');
    }

    public function changeNamePassword()
    {
        return view('user.changeNamePassword');
    }
}
