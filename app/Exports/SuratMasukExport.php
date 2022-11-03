<?php

namespace App\Exports;

use App\Models\Surat_masuk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SuratMasukExport implements FromCollection, WithHeadings{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Surat_masuk::select("id", "no_surat", "judul_surat", "indeks_surat", "asal_surat", "tanggal_masuk", "filemasuk")->get();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["No", "No Surat", "Judul Surat", "Indeks Surat", "Asal Surat", "Tanggal Masuk", "Nama File"];
    }
}