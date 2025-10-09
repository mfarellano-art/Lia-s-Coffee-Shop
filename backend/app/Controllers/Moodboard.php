<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Moodboard extends BaseController
{
    public function index()
    {
        return view('users/moodboard');
    }
}
