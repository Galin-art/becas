<?php

namespace App\Imports;

use App\Models\Bimestre;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsOnError;


class BimestreImport implements ToModel, SkipsOnError
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
            'id'=>$row[0],
            'bimestre'=>$row[1],
        ]);
    }
}
