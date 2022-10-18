<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Surat_masuk extends Model
{
    
    protected $table = "surat_masuk";
    protected $primaryKey = "id";
    protected $fillable = [
       'id', 'tanggal_masuk', 'no_surat', 'judul_surat', 'indeks_surat', 'asal_surat', 'filemasuk',
    ];

}

