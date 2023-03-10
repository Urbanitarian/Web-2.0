<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;

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
    }


}
