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
                'name' => !empty($row[0]) ? $row[0] : 'default name',
                'image' => !empty($row[1]) ? $row[1] : 'default_image.jpg',
                'type' =>  !empty($row[2]) ? explode(", ", $row[2]) : ["No type"],
                'link' => !empty($row[3]) ? $row[3] : 'http://',
                'country' => !empty($row[4]) ? $row[4] : '',
            ]);
        }
    }

    public function headingRow(): int
    {
        return 0;
    }
}
