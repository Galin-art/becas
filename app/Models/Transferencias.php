<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transferencias extends Model
{
    use HasFactory;

    public function bimestre(){
        return $this->belongsTo(Bimestre::class);
    }

    public function beneficario(){
        return $this->belongsTo(Beneficiario::class);
    }

//    public function beneficiarios(){
//        return $this->hasOne(Beneficiario::class);
//    }


}

