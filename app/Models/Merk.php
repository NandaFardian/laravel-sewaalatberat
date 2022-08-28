<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    // use HasFactory;
    public function alatberats(){
        return $this->belongTo(Alatberat::class);
    }
    // public function laporansewas(){
    //     return $this->belongTo(LaporanSewa::class);
    // }
}
