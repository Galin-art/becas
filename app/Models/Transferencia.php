<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transferencia extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
//        'año',
        'familia_id',
        'monto',
        'canal',
        'tipoCanal',
        'modalidad',
        'tipoDocumento',
        'observaciones',
        'beneficiario_id',
        'bimestre_id',
        'registro',

    ];
    protected $table= 'transferencias';

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

