<?php

namespace Database\Seeders;

use App\Models\Neighbourhood;
use App\Models\Streetscape;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelationManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $filePath = storage_path('app/public/docs/masterplans.csv');

        $file = fopen($filePath, 'r');

        $header = fgetcsv($file);

        $masters = [];
        while ($row = fgetcsv($file)) {
            $masters[] = array_combine($header, $row);
        }

        fclose($file);

        $filePath = storage_path('app/public/docs/streetscapes.csv');

        $file = fopen($filePath, 'r');

        $header = fgetcsv($file);

        $streets = [];
        while ($row = fgetcsv($file)) {
            $streets[] = array_combine($header, $row);
        }

        fclose($file);

        $filePath = storage_path('app/public/docs/urbanscapes.csv');

        $file = fopen($filePath, 'r');

        $header = fgetcsv($file);

        $urbans = [];
        while ($row = fgetcsv($file)) {
            $urbans[] = array_combine($header, $row);
        }

        fclose($file);


        foreach ($masters as  $master) {
            foreach ($streets as $street) {
                if ($street['masterplan_id'] == $master['ref_id']) {
                    Streetscape::find($street['id'])?->update([
                        'masterplan_id' => $master['id']
                    ]);
                }
            }
            foreach ($urbans as $urban) {
                if ($urban['masterplan_id'] == $master['ref_id']) {
                    Neighbourhood::find($urban['id'])?->update([
                        'masterplan_id' => $master['id']
                    ]);
                }
            }
        }
    }
}
