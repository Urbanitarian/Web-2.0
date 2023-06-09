<?php

namespace App\Http\Livewire;

use App\Models\CollectionName;
use Livewire\Component;

class Collection extends Component
{
    public $search;

    public $user_id;

    protected $listeners = [
        'collection-reset' => 'fetchAll'
    ];

    public function  fetchAll()
    {
        $this->reset();
    }

    public function mount()
    {
        $this->user_id = session()->get('FRONT_USER_ID');
    }



    public function render()
    {

        $collections = CollectionName::where('name', 'like', '%' . $this->search . '%')
            ->where('user_id', $this->user_id)
            ->get();

        return view('livewire.collection', compact('collections'));
    }
}
