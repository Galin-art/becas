<?php

namespace App\Imports;

use App\Models\Region;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RegionesImport implements ToModel, SkipsOnError, WithHeadingRow
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
        return new Region([
            //
            'id'=> $row['idreg'],
            'region' => $row['region'],

        ]);
    }
//    public function headingRow(): int
//    {
//        return 2;
//    }
}
