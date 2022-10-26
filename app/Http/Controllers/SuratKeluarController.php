<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Surat_keluar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SuratKeluarController extends Controller
{
    public function index(){
    $dtsurat_keluar = Surat_keluar::orderBy('id', 'desc')->paginate(10);
        return view('/suratkeluar.index', compact('dtsurat_keluar'), [
            'title' => 'Surat Keluar',
        ]);
    }

    public function add(){
        return view('suratkeluar.tambahdatakeluar',[
            'title' => 'Tambah Data Surat Keluar'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal_keluar'  => 'required',
            'no_surat'        => 'required',
            'judul_surat'     => 'required',
            'indeks_surat'    => 'required',
            'tujuan_surat'    => 'required',
            'filekeluar'      => 'mimes:pdf',
        ]);

        $suratkeluar = new Surat_keluar();
        $suratkeluar->no_surat       = $request->input('no_surat');
        $suratkeluar->judul_surat    = $request->input('judul_surat');
        $suratkeluar->indeks_surat   = $request->input('indeks_surat');
        $suratkeluar->tujuan_surat   = $request->input('tujuan_surat');
        $suratkeluar->tanggal_keluar  = $request->input('tanggal_keluar');
        $file                        = $request->file('filekeluar');
        $fileName   = 'SuratKeluar - '. $file->getClientOriginalName();
        $file->storePubliclyAs("/suratkeluar", $fileName);
        $suratkeluar->filekeluar  = $fileName;
        $suratkeluar->save();

        // Surat_keluar::create([
            // 'tanggal_keluar' => $request->tanggal_keluar,
            // 'no_surat'       => $request->no_surat,
            // 'judul_surat'    => $request->judul_surat,
            // 'indeks_surat'   => $request->indeks_surat,
            // 'tujuan_surat'    => $request->tujuan_surat,
        // ]);

        return redirect('suratkeluar.index');
    }

    public function edit($id)
    {
        $suratkeluar = Surat_keluar::query()->where('id', $id)->first();

        return view('suratkeluar.editdatakeluar', compact('suratkeluar'),[
            'title' => 'Edit Data Surat Keluar'
        ]);
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $suratkeluar = Surat_keluar::query()->where('id', $input['id'])->first();
        $suratkeluar->tanggal_keluar = $request->get('tanggal_keluar');
        $suratkeluar->no_surat = $request->get('no_surat');
        $suratkeluar->judul_surat = $request->get('judul_surat');
        $suratkeluar->indeks_surat = $request->get('indeks_surat');
        $suratkeluar->tujuan_surat = $request->get('tujuan_surat');

        if($request->hasFile('filekeluar'))
        {
            $file = $request->file('filekeluar')->storePubliclyAs('/suratkeluar','SuratKeluar - '. $request->file('filekeluar')->getClientOriginalName());
            $suratkeluar->filekeluar = 'SuratKeluar - '. $request->file('filekeluar')->getClientOriginalName();
            $suratkeluar->save();
        }

        return redirect('suratkeluar.index');
    }

    public function destroy($id)
    {
        $suratkeluar = Surat_keluar::query()->where('id', $id)->first();
        if ($suratkeluar){
            $suratkeluar->delete();
        }
        return back();
    }
}