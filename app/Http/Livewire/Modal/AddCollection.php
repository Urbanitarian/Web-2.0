<?php

namespace App\Http\Livewire\Modal;

use App\Models\CollectionName;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddCollection extends ModalComponent
{

    public $name;
    public $description;


    public function addCollection()
    {
        CollectionName::create([
            'name' => $this->name,
            'description' => $this->description
        ]);

        $this->emit('collection-reset');

        $this->closeModal();
    }


    public static function closeModalOnClickAway(): bool
    {
        return true;
    }


    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function render()
    {
        return view('livewire.modal.add-collection');
    }
}
