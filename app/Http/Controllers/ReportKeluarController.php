<?php

namespace App\Http\Controllers;

use App\Models\Surat_keluar;
use App\Exports\SuratKeluarExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportKeluarController extends Controller
{
    public function index() {

        $dtsurat_keluar = Surat_keluar::orderBy('id', 'desc')->paginate(10);
        return view('/reportkeluar', compact('dtsurat_keluar'), [
            'title' => 'Report Surat Keluar'
        ]);
    }

    public function export() 
    {
        return Excel::download( new SuratKeluarExport, 'LaporanSuratKeluar.xlsx');
    }
}
