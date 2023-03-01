<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    protected $layout = 'layouts.base';

    public function render()
    {
        if (Auth::check()) {
            Cart::instance('cart')->restore(Auth::user()->email);
        }

        return view('livewire.home-component')->layout('layouts.base');
    }
}
