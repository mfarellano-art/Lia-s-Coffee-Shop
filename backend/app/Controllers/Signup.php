<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Signup extends BaseController
{
    public function index()
    {
        return view('users/signup'); // app/Views/users/signup.php
    }
}
