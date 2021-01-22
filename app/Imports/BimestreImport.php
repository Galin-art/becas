<?php

namespace App\Imports;

use App\Models\Bimestre;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class BimestreImport implements ToModel, SkipsOnError, WithHeadingRow
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
        return new Bimestre([
            //
            'id'=>$row['id'],
            'bimestre'=>$row['bimestre'],
//            'prueba'=>$row['bimestre'].$row['id'],
        ]);
    }
}
