<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integrante extends Model
{
    use HasFactory;


    protected $fillable=[
        'id',
        'integrante',
        'beneficiario_id',


    ];

    protected $table='integrantes';


    public function beneficiariosss()
    {
        return $this->belongsTo(Beneficiario::class);
    }


}
