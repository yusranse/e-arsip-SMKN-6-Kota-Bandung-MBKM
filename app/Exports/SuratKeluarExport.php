<?php

namespace App\Exports;

use App\Models\Surat_keluar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SuratKeluarExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Surat_keluar::select("id", "no_surat", "judul_surat", "indeks_surat", "tujuan_surat", "tanggal_keluar", "filekeluar")->get();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["No", "No Surat", "Judul Surat", "Indeks Surat", "Tujuan Surat", "Tanggal Keluar", "Nama File"];
    }
}
