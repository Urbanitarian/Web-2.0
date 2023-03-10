<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Str;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::insert([
            [
                'id' => Str::uuid(),
                'title' => 'Evenement 1',
                'start' => '2023-03-11',
                'end' => null
            ],
            [
                'id' => Str::uuid(),
                'title' => 'Evenement 2',
                'start' => '2023-03-12T08:00:00',
                'end' => '2023-03-12T16:00:00'
            ],
            [
                'id' => Str::uuid(),
                'title' => 'Evenement 3',
                'start' => '2023-03-14',
                'end' => '2023-03-15'
            ],
        ]);
    }
}