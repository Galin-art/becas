<?php

namespace App\Imports;

use App\Domicilio;
use Maatwebsite\Excel\Concerns\ToModel;

class DomicilioImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Domicilio([
            //
        ]);
    }
}
