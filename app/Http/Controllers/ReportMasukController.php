<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat_masuk;
use App\Exports\SuratMasukExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ReportMasukController extends Controller
{
    public function index() {

        $dtsurat_masuk = Surat_masuk::orderBy('id', 'desc')->paginate(10);
        return view('/reportmasuk', compact('dtsurat_masuk'), [
            'title' => 'Report Surat Masuk'
        ]);
    }

    public function export() 
    {
        return Excel::download( new SuratMasukExport, 'LaporanSuratMasuk.xlsx');
    }
}
