<?php

namespace App\Imports;

use App\Localidad;
use Maatwebsite\Excel\Concerns\ToModel;

class LocalidadImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Localidad([
            //
        ]);
    }
}
