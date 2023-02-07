<?php

namespace App\Imports;

use App\Models\Dictionary;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DictionariesImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        foreach ($row as $key => $value) {
          
            return new Dictionary([
                'name' => "$row[0]",
                'type' => "$row[1]",
                'tags' =>  explode(", ", $row[2]),
                'image' => "$row[3]",
                'link' => "$row[4]",
                'description' => "$row[5]",
            ]);
        }
    }

    public function headingRow(): int
    {
        return 0;
    }
}
