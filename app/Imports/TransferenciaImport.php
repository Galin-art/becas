<?php

namespace App\Imports;

use App\Models\Transferencia;
use Maatwebsite\Excel\Concerns\ToModel;

class TransferenciaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Transferencia([
            //
        ]);
    }
}
