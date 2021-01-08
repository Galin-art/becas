<?php

namespace App\Imports;

use App\Municipio;
use Maatwebsite\Excel\Concerns\ToModel;

class MunicipioImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Municipio([
            //
        ]);
    }
}
