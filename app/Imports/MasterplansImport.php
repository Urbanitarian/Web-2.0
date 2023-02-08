<?php

namespace App\Imports;

use App\Models\Masterplan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MasterplansImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        foreach ($row as $key => $value) {
            return new Masterplan([
                'image' => !empty($row[0]) ? $row[0] : 'default_image.jpg',
                'title' => !empty($row[1]) ? $row[1] : 'No title',
                'author' =>  !empty($row[2]) ? strtoupper($row[2]) : 'No author',
                'city' => !empty($row[3]) ? ucfirst(strtolower($row[3])) : 'No city',
                'country' => !empty($row[4]) ? ucfirst(strtolower($row[4])) : 'No country',
                'program' => !empty($row[5]) ? $row[5] : 'No program',
                'year' => !empty($row[6]) ? $row[6] : '2023',
                'area' => !empty($row[7]) ? $row[7] : '0',
                'gfa' => !empty($row[8]) ? $row[8] : '0',
                'density' => !empty($row[9]) ? $row[9] : '0',
                'popdensity' => !empty($row[10]) ? $row[10] : '0',
                'homeunit' => !empty($row[11]) ? $row[11] : '0',
                'jobs' => !empty($row[12]) ? $row[12] : '0',
                'streetroad' => !empty($row[13]) ? $row[13] : '0',
                'buildup' => !empty($row[14]) ? $row[14] : '0',
                'nonbuildup' => !empty($row[15]) ? $row[15] : '0',
                'residential' =>!empty($row[16]) ? $row[16] : '0',
                'business' => !empty($row[17]) ? $row[17] : '0',
                'commercial' => !empty($row[18]) ? $row[18] : '0',
                'civic' => !empty($row[19]) ? $row[19] : '0',
                'description' => !empty($row[20]) ? $row[20] : 'No description',
                'credits' => !empty($row[21]) ? $row[21] : 'No credit',
                'location' => !empty($row[22]) ? $row[22] : '00.00, 00.00',
                'status' =>  !empty($row[23]) ? strtolower($row[23]) : 'No status',
                'size' => !empty($row[24]) ? strtoupper($row[24]) : 'No size',
                'tags' =>  !empty($row[25]) ? explode(", ", $row[25]) : ["No Tags"],
                'link' => !empty($row[26]) ? $row[26] : 'http://www.website.com',
                'category' => "Masterplans",
                'address' =>"adress_dummy",
            ]);
        }
       
    }


    public function headingRow(): int
    {
        return 0;
    }
}
