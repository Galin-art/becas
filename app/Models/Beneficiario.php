<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'nombre',
        'paterno',
        'materno',
        'telefono',
        'folio',
        'curp',
        'entidad',
        'localidad_id',


    ];

    protected $table='beneficiarios';





    public function localidad()
    {
        return $this->belongsTo(Localidad::class);
    }
    public function transferencias(){
        return $this->hasMany(Transferencia::class);
    }

    public function integrant(){
        return $this->HasMany(Integrante::class);
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
