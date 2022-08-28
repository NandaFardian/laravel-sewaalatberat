<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    // use HasFactory;
    public function sewas(){
        return $this->hasOne(Sewa::class,'id','sewas_id');
    }
}
