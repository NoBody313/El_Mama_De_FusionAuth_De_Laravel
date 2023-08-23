<?php

namespace App\Imports;

use App\Models\Drink;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportDrinks implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Drink([
            'name' => $row[0],
            'stock' => $row[1]
        ]);
    }
}
