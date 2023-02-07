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
                'image' => $row[0],
                'title' => $row[1],
                'author' => strtoupper("$row[2]"),
                'city' => ucfirst(strtolower("$row[3]")),
                'country' => ucfirst(strtolower("$row[4]")),
                'program' => $row[5],
                'year' => $row[6],
                'area' => $row[7],
                'gfa' => $row[8],
                'density' => $row[9],
                'popdensity' => $row[10],
                'homeunit' => $row[11],
                'jobs' => $row[12],
                'streetroad' => $row[13],
                'buildup' => $row[14],
                'nonbuildup' => $row[15],
                'residential' => $row[16],
                'business' => $row[17],
                'commercial' => $row[18],
                'civic' => $row[19],
                'description' => $row[20],
                //'credits' => $row[21],
                'location' => $row[22],
                'status' => strtolower("$row[23]"),
                'size' => strtoupper("$row[24]"),
                'tags' => explode(",", $row[25]),
                'link' => "$row[26]",
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
