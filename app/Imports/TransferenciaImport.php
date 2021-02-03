<?php

namespace App\Imports;

use App\Models\Transferencia;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class TransferenciaImport implements ToModel , SkipsOnError,WithHeadingRow
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
//            'id'=>$row['familia_id'],
//            'año'=>$row[1],
            'familia_id'=>$row['familia_id'],
            'monto'=>$row['total'],
            'canal'=>$row['canal'],
            'tipoCanal'=>$row['tipocanal'],
            'modalidad'=>$row['liquidador'],
            'tipoDocumento'=>$row['modalidad'],
            'observaciones'=>$row['observaciones'],
            'beneficiario_id'=>$row['familia_id'],
            'bimestre_id'=>$row['bimestre_id'],
//            'tarjeta_id'=>$row[10],
            'registro'=>$row['familia_id'].$row['bimestre_id'],

        ]);
    }
}
