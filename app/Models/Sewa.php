<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    // use HasFactory;
    public function alatberats(){
        return $this->hasOne(Alatberat::class,'id','alatberats_id');
    }
    public function merks(){
        return $this->hasOne(Alatberat::class,'id','merks_id');
    }
    public function pembayarans(){
        return $this->belongTo(Pembayaran::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
