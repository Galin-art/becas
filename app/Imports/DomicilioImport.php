<?php

namespace App\Imports;

use App\Models\Domicilio;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class DomicilioImport implements ToModel,  SkipsOnError, WithHeadingRow
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
            'id'=>$row['familia_id'],
            'inegi'=>$row['inegi'],
            'tipovt'=>$row['tipovt'],
            'vialidad'=>$row['vialidad'],
//            'vialidad2'=>$row['vialidad2],
//            'vialidad3'=>$row['vialidad3],
            'num_ext'=>$row['numero_ext'],
            'tipoat'=>$row['tipoat'],
            'colonia'=>$row['colonia'],
            'cp'=>$row['cp'],
            'telefono'=>$row['tel'],
//            'correo'=>$row['correo'],
            'referencia'=>$row['referencia'],



        ]);
    }
}
