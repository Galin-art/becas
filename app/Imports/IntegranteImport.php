<?php

namespace App\Imports;

use App\Models\Integrante;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class IntegranteImport implements ToModel,  SkipsOnError
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
        return new Integrante([
            //
            'id'=>$row[1],
            'integrante'=>$row[1],
            'beneficiario_id'=>$row[0],

        ]);
    }
}
