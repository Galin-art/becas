<?php

namespace App\Imports;

use App\Models\Beneficiario;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BeneficiarioImport implements ToModel, SkipsOnError
{
    use Importable;

    /**
     * @param \Throwable $e
     */
    public function onError(\Throwable $e)
    {
        // Handle the exception how you'd like.
    }



    public function model(array $row)
    {
        return new Beneficiario([
            //
            'id'=>$row[0],
            'nombre'=>$row[3],
            'paterno'=>$row[4],
            'materno'=>$row[5],
//            'telefono'=>$row[],
            'folio'=>$row[2],
            'curp'=>$row[7],
            'entidad'=>$row[1],
            'localidad_id'=>$row[10],
            'domicilio_id'=>$row[0],

        ]);
    }
}
