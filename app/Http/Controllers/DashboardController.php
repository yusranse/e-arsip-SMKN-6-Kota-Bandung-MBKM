<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat_masuk;
use App\Models\Surat_keluar;

class DashboardController extends Controller
{
    public function index() {
        $dtsurat_masuk = Surat_masuk::orderBy('id', 'desc')->paginate(10);
        $dtsurat_keluar = Surat_keluar::orderBy('id', 'desc')->paginate(10);
        return view('/dashboard', compact('dtsurat_masuk', 'dtsurat_keluar'), [
            'title' => 'Dashboard'
        ]);
    }
}
