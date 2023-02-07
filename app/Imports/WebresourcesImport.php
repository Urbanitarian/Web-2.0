<?php

namespace App\Imports;

use App\Models\Webresource;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class WebresourcesImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        foreach ($row as $key => $value) {
           
            return new Webresource([
                'name' => "$row[0]",
                'type' => "$row[1]",
                'tags' =>  explode(", ", $row[2]),
                'image' => "$row[3]",
                'link' => "$row[4]",
            ]);
        }
    }

    public function headingRow(): int
    {
        return 0;
    }
}
