<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colonia extends Model
{
    use HasFactory;

    protected $table='colonias';



    public function localidad(){
        return $this->belongsTo(Localidad::class);
    }



}
