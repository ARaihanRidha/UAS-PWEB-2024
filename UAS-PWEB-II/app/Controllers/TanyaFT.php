<?php

namespace App\Controllers;

use App\Models\QuestionModel;

class TanyaFT extends BaseController
{
    public function index(){
        echo view('tanyaft/index');
    }
    public function pengajuan(){
        echo view('tanyaft/pengajuan');
        
    }
}
