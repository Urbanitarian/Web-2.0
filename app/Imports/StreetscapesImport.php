<?php

namespace App\Imports;

use App\Models\Streetscape;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StreetscapesImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        foreach ($row as $key => $value) {
            $pieces = explode(", ", $row[0]);
            return new Streetscape([
                'imagea' => "$pieces[0]",
                'imageb' => "$pieces[1]",
                'title' => "$row[1]",
                'address' => "$row[2]",
                'program' => "$row[3]",
                'author' => strtoupper("$row[4]"),
                'city' => ucfirst(strtolower("$row[5]")),
                'country' => ucfirst(strtolower("$row[6]")),
                'area' => "$row[7]",
                'description' => "$row[8]",
                'credits' => "$row[9]",
                'location' => "$row[10]",
                'status' => strtolower("$row[11]"),
                'size' => strtoupper("$row[12]"),
                'tags' =>  explode(", ", $row[13]),
            ]);
        }
    }

    public function headingRow(): int
    {
        return 0;
    }
}
