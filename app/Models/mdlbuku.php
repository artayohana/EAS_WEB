<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mdlbuku extends Model
{
    use HasFactory;
    protected $table = 'tbl_databuku';
    protected $primaryKey = 'id';
    protected $fillable = [
        'isbn',
        'judul_buku',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'cetakan_ke',
        'jumlah_halaman'
    ];

    public $timestamps = false;

}
