<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table='municipios';



    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function localidades(){
        return $this->hasMany(Localidad::class);
    }
}
