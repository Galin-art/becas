<?php

namespace App\Imports;

use App\Colonia;
use Maatwebsite\Excel\Concerns\ToModel;

class ColoniaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Colonia([
            //
        ]);
    }
}
