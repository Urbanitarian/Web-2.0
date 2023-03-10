<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;
use DateTime;
use Pestopancake\LaravelBackpackNotifications\Notifications\DatabaseNotification;

class Calendar extends Component
{
    public $events = [];
    public function render()
    {
        $this->events = json_encode(Event::all());
        return view('livewire.calendar');
    }
    
    public function eventAdd($event)
    {
        Event::create($event);
        $title = $event['title'];
        $start = $event['start'];
        $startdate = new DateTime($start);
        $formattedStartDate = $startdate->format('d F H:i');
        $end = $event['end'];
        $enddate = new DateTime($end);
        $formattedEndDate = $enddate->format('H:i');
        

        $admin = backpack_user()->where('id', 3)->first();
        $admin->notify(
            new DatabaseNotification(
                ($type = 'info'), // info / success / warning / error
                ($message = 'New Appointement saved'),
                ($messageLong = 'New Appointement with: ' . $title . ' ' . $formattedStartDate . ' to ' . $formattedEndDate)
                   // rand(1, 99999)), // optional
                // ($href = '/some-custom-url'), // optional, e.g. backpack_url('/example')
               // ($hrefText = 'Go to custom URL') // optional
            )
        );
    }


}
