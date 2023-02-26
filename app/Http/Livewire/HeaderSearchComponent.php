<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class HeaderSearchComponent extends Component
{
    public $search;

    public function render()
    {
        $product = Product::where('name', 'like','%'.$this->search.'%');
        return view('livewire.header-search-component', compact('product'))->layout('layouts.base');
    }
}
