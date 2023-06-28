<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AboutMe extends BaseController
{
    public function index()
    {
        return view('about/index');
    }
}
