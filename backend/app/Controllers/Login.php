<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index(): string
    {
        return view('user/login');
    }
}
