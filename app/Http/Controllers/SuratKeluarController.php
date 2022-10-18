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
        ]);

        Surat_keluar::create([
            'tanggal_keluar' => $request->tanggal_keluar,
            'no_surat'       => $request->no_surat,
            'judul_surat'    => $request->judul_surat,
            'indeks_surat'   => $request->indeks_surat,
            'tujuan_surat'    => $request->tujuan_surat,
        ]);

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
        $suratmasuk = Surat_keluar::query()->where('id', $input['id'])->first();
        $suratmasuk->tanggal_keluar = $request->get('tanggal_keluar');
        $suratmasuk->no_surat = $request->get('no_surat');
        $suratmasuk->judul_surat = $request->get('judul_surat');
        $suratmasuk->indeks_surat = $request->get('indeks_surat');
        $suratmasuk->tujuan_surat = $request->get('tujuan_surat');
        $suratmasuk->save();

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