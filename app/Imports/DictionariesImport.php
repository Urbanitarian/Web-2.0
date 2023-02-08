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
                'name' => !empty($row[0]) ? $row[0] : 'default name',
                'image' => !empty($row[1]) ? $row[1] : 'default_image.jpg',
                'description' => !empty($row[2]) ? $row[2] : 'description',
                'sources' => !empty($row[3]) ? $row[3] : 'http://',
                'type' => "Dictionary",
            ]);
        }
    }

    public function headingRow(): int
    {
        return 0;
    }
}
