<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    use HasFactory;


    protected $table='beneficiarios';





    public function colonia()
    {
        return $this->belongsTo(Colonia::class);
    }



    public function scopeCurp($query, $curpsss){
        if($curpsss){
            return $query->where('curp', 'LIKE',"%$curpsss%");
        }
        //como =like

    }

    public function scopeFamilai($query, $famidsss){
        if($famidsss){
            return $query->where('famid','LIKE',"%$famidsss%");
//            return $query->where('dato de la base','LIKE',"%$famidsss%");
        }
    }

}
