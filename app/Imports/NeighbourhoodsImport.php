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
        $neighbourhoods = Neighbourhood::where('title', $row[1])->first();
        if ($neighbourhoods) {
            return null;
        } else {
        return new Neighbourhood([
            'image' => "['uploads\/neighbourhoods\/$row[0].png']",
            'title' => $row[1],
            'author' => $row[2],
            'city' => $row[3],
            'country' => $row[4],
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
            'credits' => $row[21],
            'location' => $row[22],
            'status' => $row[23],
            'size' => $row[24],
            'tags' => explode(",",$row[25]),
            'link' => $row[26],
            'category' => "Neighbourhoods",
            'address' =>"adress_dummy",
        ]);
    }
    }

    public function headingRow(): int
    {
        return 0;
    }
}
