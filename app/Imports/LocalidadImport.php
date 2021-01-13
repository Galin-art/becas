<?php

namespace App\Imports;

use App\Models\Localidad;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LocalidadImport implements ToModel,  SkipsOnError
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
        return new Localidad([
            //
            'id'=>$row[9],
            'localidad'=>$row['5'],
            'tipo'=>$row[7],
            'tipotexto'=>$row[8],
            'inegi'=>$row[6],
            'municipio_id'=>$row[2],
        ]);
    }
}
