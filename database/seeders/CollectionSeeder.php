<?php

namespace Database\Seeders;

use App\Models\CollectionName;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CollectionName::truncate();

        CollectionName::create([
            'name' => 'Default'
        ]);
    }
}
