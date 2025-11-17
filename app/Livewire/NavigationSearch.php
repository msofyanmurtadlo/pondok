<?php

namespace App\Livewire;
use Livewire\Component;

class NavigationSearch extends Component
{
    // You will need to add this property
    // to match the wire:model='q' in your view
    public $q;

    public function render()
    {
        return view('livewire.navigation-search');
    }
}
