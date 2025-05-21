<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');  // pastikan file view home.php ada di app/Views/home.php
    }
}

