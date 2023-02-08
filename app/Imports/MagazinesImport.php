<?php

namespace App\Imports;

use App\Models\Magazine;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MagazinesImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        foreach ($row as $key => $value) {
      
            return new Magazine([
         
                'name' => !empty($row[0]) ? $row[0] : 'default name',
                'image' => !empty($row[1]) ? $row[1] : 'default_image.jpg',
                'type' =>  !empty($row[2]) ? explode(", ", $row[2]) : ["No type"],
                'link' => !empty($row[3]) ? $row[3] : 'http://',
               
            ]);
        }
    }

    public function headingRow(): int
    {
        return 0;
    }
}
