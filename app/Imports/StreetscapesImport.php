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
                'imagea' => !empty($pieces[0]) ? $pieces[0] : 'default_image.jpg',
                'imageb' => !empty($pieces[1]) ? $pieces[1] : 'default_image.jpg',
                'title' => !empty($row[1]) ? $row[1] : 'No title',
                'address' => !empty($row[2]) ? $row[2] : 'No address',
                'program' => !empty($row[3]) ? $row[3] : 'No program',
                'author' => !empty($row[4]) ? strtoupper($row[4]) : 'No author',
                'city' => !empty($row[5]) ? ucwords(strtolower($row[5])) : 'No city',
                'country' => !empty($row[6]) ? ucwords(strtolower($row[6])) : 'No country',
                'area' => !empty($row[7]) ? $row[7] : '0',
                'description' => !empty($row[8]) ? $row[8] : 'No description',
                'credits' => !empty($row[9]) ? $row[9] : 'No credits',
                'location' =>  !empty($row[10]) ? $row[10] : '00.00, 00.00',
                'status' => !empty($row[11]) ? strtolower($row[11]) : 'No status',
                'size' =>  !empty($row[12]) ? strtoupper($row[12]) : 'No size',
                'tags' =>  !empty($row[13]) ? explode(", ", $row[13]) : ["No Tags"],
            ]);
        }
    }

    public function headingRow(): int
    {
        return 0;
    }
}
