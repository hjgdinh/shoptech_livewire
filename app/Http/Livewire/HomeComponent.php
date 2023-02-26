<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class HomeComponent extends Component
{
    protected $layout = 'layouts.base';

    public function render()
    {
        return view('livewire.home-component')->layout('layouts.base');
    }
}
