<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;
use DateTime;
use App\Mail\AppointementMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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
        $usermail = env('MAIL_USERNAME');

        Event::create($event);
        $title = $event['title'];
        $start = $event['start'];
        $startdate = new DateTime($start);
        $formattedStartDate = $startdate->format('d F H:i');
        $end = $event['end'];
        $enddate = new DateTime($end);
        $formattedEndDate = $enddate->format('H:i');
        Mail::to($title)->queue(new AppointementMail('Your contact request has been registered, we will contact you shortly'));
        Mail::to($usermail)->queue(new AppointementMail('New contact request from: ' . $title . ' ' . $formattedStartDate . ' to ' . $formattedEndDate));

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
    
    public function eventDelete($event){
        Event::destroy($event);
    }





}
