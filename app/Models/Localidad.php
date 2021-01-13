<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'localidad',
        'tipo',
        'tipotexto',
        'inegi',
        'municipio_id',

    ];

    protected $table='localidades';


    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }

    public function beneficiarios(){
        return $this->hasMany(Beneficiario::class);
    }
}
