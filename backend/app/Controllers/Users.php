<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        return view('users/landing');
    }

    public function login()
    {
        return view('users/login');
    }

    public function signup()
    {
        return view('users/signup');
    }

    public function roadmap()
    {
        return view('users/roadmap');
    }

    public function moodboard()
    {
        return view('users/moodboard');
    }
    public function landing()
    {
    return view('user/landing');
    }
}
