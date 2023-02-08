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
                'image' => "$row[1]",
                'description' => "$row[2]",
                'sources' => "$row[3]",
                'type' => "Dictionary",
            ]);
        }
    }

    public function headingRow(): int
    {
        return 0;
    }
}
