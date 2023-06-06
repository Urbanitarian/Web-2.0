<?php

namespace App\Http\Livewire;

use App\Models\CollectionName;
use Livewire\Component;

class Collection extends Component
{
    public $search;

    protected $listeners = [
        'collection-reset' => 'fetchAll'
    ];

    public function  fetchAll()
    {
        $this->reset();
    }



    public function render()
    {
        $collections = CollectionName::where('name', 'like', '%' . $this->search . '%')->get();

        return view('livewire.collection', compact('collections'));
    }
}
