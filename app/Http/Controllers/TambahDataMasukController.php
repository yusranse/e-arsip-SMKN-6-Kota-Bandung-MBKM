<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahDataMasukController extends Controller
{
    public function index() {
        return view('/tambahdatamasuk',[
            'title' => 'Tambah Data'
        ]);
    }
}
