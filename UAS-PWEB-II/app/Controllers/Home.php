<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function dashboard()
    {
        return view('dashboard');
    }
    public function e_response()
    {
        return view('e_response');
    }
}