<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use App\Models\Product;

class DetailComponent extends Component
{
    public $slug;
    public $products;
    public array $quantity = [];

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->products = Product::all();
        foreach ($this->products as $product) {
            $this->quantity[$product->id] = 1;
        }
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add(
            $product_id,
            $product_name,
            $this->quantity[$product_id],
            $product_price,
        )->associate('App\Models\Product');
        session()->flash('message', 'Thêm vào giỏ thành công');
        return redirect()->route('shop.component');
        $this->emit('cart_updated');
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        return view('livewire.detail-component', compact('product'))->layout('layouts.base');
    }
}
