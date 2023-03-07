<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartCountComponent extends Component
{
    protected $listeners = [
        'cart_updated' => 'render',
    ];

    public function render()
    {
        $cart_count = Cart::instance('cart')->count();    
        return view('livewire.cart-count-component',compact('cart_count'))->layout('layouts.base');
    }
}
