<?php

namespace App\Imports;

use App\Models\Domicilio;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsOnError;


class DomicilioImport implements ToModel,  SkipsOnError
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function onError(\Throwable $e)
    {
        // Handle the exception how you'd like.
    }


    public function model(array $row)
    {
        return new Domicilio([
            //
            'id'=>$row[0],
            'inegi'=>$row[2],
            'tipovt'=>$row[3],
            'vialidad'=>$row[4],
//            'vialidad2'=>$row[4],
//            'vialidad3'=>$row[4],
            'num_ext'=>$row[5],
            'tipoat'=>$row[6],
            'colonia'=>$row[7],
            'cp'=>$row[8],
            'telefono'=>$row[10],
//            'correo'=>$row[11],
            'referencia'=>$row[9],



        ]);
    }
}
