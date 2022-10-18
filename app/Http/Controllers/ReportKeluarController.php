<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportKeluarController extends Controller
{
    public function index() {
        return view('/reportkeluar',[
            'title' => 'Report Surat Keluar'
        ]);
    }
}
