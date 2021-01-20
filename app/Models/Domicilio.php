<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'inegi',
        'tipovt',
        'vialidad',
        'vialidad2',
        'vialidad3',
        'num_ext',
        'tipoat',
        'colonia',
        'cp',
        'telefono',
        'correo',
        'referencia',
    ];

    public function domicilio(){
        return $this->hasOne(Beneficiario::class);
    }
}
