<?php

namespace App\Imports;

use App\Models\Localidad;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LocalidadImport implements ToModel,  SkipsOnError, WithHeadingRow
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
            'id'=>$row['locid'],
            'localidad'=>$row['localidad'],
            'tipo'=>$row['tipo'],
            'tipotexto'=>$row['tipotexto'],
            'inegi'=>$row['inegi'],
            'municipio_id'=>$row['mun'],
        ]);
    }
}
