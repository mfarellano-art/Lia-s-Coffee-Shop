<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Users extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function roadmap()
    {
        return view('roadmap');
    }

    public function moodboard()
    {
        return view('moodboard');
    }
}
