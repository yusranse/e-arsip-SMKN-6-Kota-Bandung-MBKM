<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportMasukController extends Controller
{
    public function index() {
        return view('/reportmasuk',[
            'title' => 'Report Surat Masuk'
        ]);
    }
}
