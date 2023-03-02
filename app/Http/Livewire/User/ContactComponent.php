<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        return view('livewire.user.contact-component')->layout('layouts.base');
    }
}
