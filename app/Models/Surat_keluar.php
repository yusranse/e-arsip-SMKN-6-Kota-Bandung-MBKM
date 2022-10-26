<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Surat_keluar extends Model
{
    protected $table = "surat_keluar";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tanggal_keluar', 'no_surat', 'judul_surat', 'indeks_surat', 'tujuan_surat', 'filekeluar',
    ];

}

