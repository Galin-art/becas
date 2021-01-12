<?php

namespace App\Imports;

use App\Models\Beneficiario;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BeneficiarioImport implements ToModel, WithHeadingRow, SkipsOnError
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
            'id'=>$row['id'],
            'nombre'=>$row['nombre'],
            'paterno'=>$row['paterno'],
            'materno'=>$row['materno'],
            'telefono'=>$row['telefono'],
            'folio'=>$row['folio'],
            'curp'=>$row['curp'],
            'entidad'=>$row['entidad'],
            'localidad_id'=>$row['localidad_id'],
        ]);
    }
}
