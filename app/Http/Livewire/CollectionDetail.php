<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\CollectionName;
use App\Models\Country;
use Livewire\Component;

class CollectionDetail extends Component
{
    public $cls;

    public $masters;
    public $streets;
    public $urbans;

    public $cities;

    public $countries;

    public function mount($id)
    {
        $this->cls = CollectionName::with('collections')->find($id);

        $this->masters = $this->cls->collections->map(function ($q) {
            return $q->masterplan;
        })->toArray();

        $this->streets = $this->cls->collections->map(function ($q) {
            return $q->streetscape;
        })->toArray();

        $this->urbans = $this->cls->collections->map(function ($q) {
            return $q->urbanscape;
        })->toArray();

        $this->cities = City::all();

        $this->countries = Country::all();
    }




    public function render()
    {
        return view('livewire.collection-detail');
    }
}
