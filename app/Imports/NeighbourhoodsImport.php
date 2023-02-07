<?php

namespace App\Imports;

use App\Models\Neighbourhood;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NeighbourhoodsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        foreach ($row as $key => $value) {
        return new Neighbourhood([
            'image' => $row[0],
            'title' => $row[1],
            'author' => strtoupper("$row[2]"),
            'city' => ucfirst(strtolower("$row[3]")),
            'country' => ucfirst(strtolower("$row[4]")),
            'program' => $row[5],
            'project_title' => $row[6],
            'year' => $row[7],
            'descriptiona' => $row[8],
            'imagea' => $row[9],
            'descriptionb' => $row[10],
            'imageb' => $row[11],
            'descriptionc' => $row[12],
            'imagec' => $row[13],
            'descriptiond' => $row[14],
            'imaged' => $row[15],
            'credits' => $row[16],
            'location' => $row[17],
            'status' => strtolower("$row[18]"),
            'size' => strtoupper("$row[19]"),
            'tags' => explode(",", $row[20]),
            'category' => "Urbanscapes",
            'address' =>"adress_dummy",
        ]);
    }
    }

    public function headingRow(): int
    {
        return 0;
    }
}
