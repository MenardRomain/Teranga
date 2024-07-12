<?php

namespace App\Controllers;

use App\Helpers\ViewHelper;

class HomeController
{
    public function index()
    {
        return ViewHelper::view('home/index');
    }
}