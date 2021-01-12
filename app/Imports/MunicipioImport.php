<?php

namespace App\Imports;

use App\Models\Municipio;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MunicipioImport implements ToModel, WithHeadingRow, SkipsOnError
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
        return new Municipio([
            //
            'municipio'=>$row['municipio'],
            'cod_postale'=>$row['cod_postale'],
            'region_id'=>$row['region_id'],
        ]);
    }
}
