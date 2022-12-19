<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mdlchart extends Model
{
    use HasFactory;
    protected $table  = "tbl_chart";
    protected $primaryKey = "id";
    protected $fillable = [
        'tahun_terbit',
        'jumlah'
    ];
}
