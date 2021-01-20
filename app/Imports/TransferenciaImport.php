<?php

namespace App\Imports;

use App\Models\Transferencia;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsOnError;



class TransferenciaImport implements ToModel , SkipsOnError
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
        return new Transferencia([
            //
            'id'=>$row[0],
//            'año'=>$row[1],
            'monto'=>$row[6],
            'canal'=>$row[1],
            'tipoCanal'=>$row[2],
            'modalidad'=>$row[3],
            'tipoDocumento'=>$row[4],
            'observaciones'=>$row[13],
            'beneficiario_id'=>$row[0],
            'bimestre_id'=>$row[12],
//            'tarjeta_id'=>$row[10],
        ]);
    }
}
