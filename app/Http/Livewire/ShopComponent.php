<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;

class ShopComponent extends Component
{

    public function store() {

    }

    public function render()
    {
        $products = Product::all();
        return view('livewire.shop-component', compact('products'))->layout('layouts.base');
    }
}
