<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

    protected $fillable=[
    'id',
    'region',
];
    use HasFactory;


    protected $table= 'regiones';


    public function municipios(){
        return $this->hasMany(Municipio::class);
    }




}

