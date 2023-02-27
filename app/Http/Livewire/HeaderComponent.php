<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
class HeaderComponent extends Component
{
    public function render()
    {
        $category = Category::where('parent_id', 0)->with(['children'])->get();
        return view('livewire.header-component', compact('category'))->layout('layouts.base');
    }
}
