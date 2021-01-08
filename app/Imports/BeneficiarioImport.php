<?php

namespace App\Imports;

use App\Beneficiario;
use Maatwebsite\Excel\Concerns\ToModel;

class BeneficiarioImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Beneficiario([
            //
        ]);
    }
}
