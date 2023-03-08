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
            'image' => !empty($row[0]) ? $row[0] : 'default_image.jpg',
            'title' => !empty($row[1]) ? $row[1] : 'No title',
            'author' =>  !empty($row[2]) ? strtoupper($row[2]) : 'No author',
            'project_title' => !empty($row[3]) ? $row[3] : 'No project title',
            'city' => !empty($row[4]) ? ucwords(strtolower($row[4])) : 'No city',
            'country' => !empty($row[5]) ? ucwords(strtolower($row[5])) : 'No country',
            'program' => !empty($row[6]) ? $row[6] : 'No program',
            'year' => !empty($row[7]) ? $row[7] : '2023',
            'descriptiona' => !empty($row[8]) ? $row[8] : 'No description',
            'imagea' => !empty($row[9]) ? $row[9] : 'default_image.jpg',
            'descriptionb' => !empty($row[10]) ? $row[10] : 'No description',
            'imageb' => !empty($row[11]) ? $row[11] : 'default_image.jpg',
            'descriptionc' => !empty($row[12]) ? $row[12] : 'No description',
            'imagec' => !empty($row[13]) ? $row[13] : 'default_image.jpg',
            'descriptiond' => !empty($row[14]) ? $row[14] : 'No description',
            'imaged' => !empty($row[15]) ? $row[15] : 'default_image.jpg',
            'credits' => !empty($row[16]) ? $row[16] : 'No credits',
            'location' => !empty($row[17]) ? $row[17] :  '00.00, 00.00',
            'status' => !empty($row[18]) ? strtolower($row[18]) : 'No status',
            'size' => !empty($row[19]) ? strtoupper($row[19]) : 'No size',
            'tags' =>  !empty($row[20]) ? explode(", ", $row[20]) : ["No Tags"],
            'category' => "Urbanscapes",
            'address' =>"address_dummy",
            'active' => 0,
        ]);
    }
    }

    public function headingRow(): int
    {
        return 0;
    }
}
