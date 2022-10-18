<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahDataKeluarController extends Controller
{
    public function index() {
        return view('/tambahdatakeluar',[
            'title' => 'Tambah Data'
        ]);
    }
}
