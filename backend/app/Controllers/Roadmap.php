<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Roadmap extends BaseController
{
    public function index()
    {
        return view('user/roadmap');
    }
}
