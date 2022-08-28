<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alatberat extends Model
{
    // use HasFactory;
    public function merks(){
        return $this->hasOne(Merk::class,'id','merks_id');
    }
    public function sewas(){
        return $this->belongTo(Sewa::class);
    }
}
