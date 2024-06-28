<?php
namespace App\Controllers;
class Home extends BaseController{
    public function index()
    {
        // Load view halaman_buku
        return view('halaman_test');
    }
}

