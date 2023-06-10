<?php

namespace App\Http\Livewire;

use App\Models\CollectionName;
use Livewire\Component;
use Livewire\WithPagination;

class Collection extends Component
{
    public $search;

    use WithPagination;

    public $user_id;

    protected $listeners = [
        'collection-reset' => '$refresh'
    ];

    public function mount()
    {
        $this->user_id = session()->get('FRONT_USER_ID');
    }



    public function render()
    {

        $collections = CollectionName::where('name', 'like', '%' . $this->search . '%')
            ->where('user_id', $this->user_id)
            ->latest()
            ->paginate(10);

        return view('livewire.collection', compact('collections'));
    }
}
