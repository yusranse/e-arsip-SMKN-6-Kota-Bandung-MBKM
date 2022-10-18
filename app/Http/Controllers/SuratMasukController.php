<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Surat_masuk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SuratMasukController extends Controller
{
    public function index(Request $request){
    $dtsurat_masuk = Surat_masuk::orderBy('id', 'desc')->paginate(2);
        return view('/suratmasuk.index', compact('dtsurat_masuk'), [
            'title' => 'Surat Masuk',
        ]);
    }

    public function add(){
        return view('suratmasuk.tambahdatamasuk',[
            'title' => 'Tambah Data Surat Masuk'
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'tanggal_masuk' => 'required',
            'no_surat'      => 'required',
            'judul_surat'   => 'required',
            'indeks_surat'  => 'required',
            'asal_surat'    => 'required',
            'filemasuk'     => 'mimes:pdf',

        ]);
        
        $suratmasuk = new Surat_masuk();
        $suratmasuk->no_surat       = $request->input('no_surat');
        $suratmasuk->judul_surat    = $request->input('judul_surat');
        $suratmasuk->indeks_surat   = $request->input('indeks_surat');
        $suratmasuk->asal_surat     = $request->input('asal_surat');
        $suratmasuk->tanggal_masuk  = $request->input('tanggal_masuk');
        $file                       = $request->file('filemasuk');
        $fileName   = 'SuratMasuk'. $file->getClientOriginalName();
        $file->move('datasuratmasuk/', $fileName);
        $suratmasuk->filemasuk  = $fileName;
        $suratmasuk->save();

        return redirect('suratmasuk.index');
    }

    public function edit($id)
    {
        $suratmasuk = Surat_masuk::query()->where('id', $id)->first();

        return view('suratmasuk.editdatamasuk', compact('suratmasuk'),[
            'title' => 'Edit Data Surat Masuk'
        ]);
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $suratmasuk = Surat_masuk::query()->where('id', $input['id'])->first();
        $suratmasuk->tanggal_masuk = $request->get('tanggal_masuk');
        $suratmasuk->no_surat = $request->get('no_surat');
        $suratmasuk->judul_surat = $request->get('judul_surat');
        $suratmasuk->indeks_surat = $request->get('indeks_surat');
        $suratmasuk->asal_surat = $request->get('asal_surat');
        $suratmasuk->save();

        return redirect('suratmasuk.index');
    }

    public function destroy($id)
    {
        $suratmasuk = Surat_masuk::query()->where('id', $id)->first();
        if ($suratmasuk){
            $suratmasuk->delete();
        }
        return back();
    }
}