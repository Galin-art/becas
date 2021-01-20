<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimestre extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'bimestre',
    ];



    public function transferencias(){
        return $this->hasMany(Transferencia::class);
    }


}
