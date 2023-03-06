<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    protected $layout = 'layouts.base';

    public function addToCart($product_id)
    {
        $product = Product::findOrFail($product_id);
        if (isset($product->image)) {
            Cart::instance('cart')->add(
                $product->id,
                $product->name,
                1, // quantity
                $product->price,
                ['image' => $product->image[0]]
            );
        } else {
            Cart::instance('cart')->add(
                $product->id,
                $product->name,
                1, // quantity
                $product->price
            );
        }
        session()->flash('message', 'Thêm vào giỏ thành công');
        return redirect()->route('shop.component');
        $this->emit('cart_updated');
    }

    public function render()
    {
        if (Auth::check()) {
            Cart::instance('cart')->restore(Auth::user()->email);
        }

        $products = Product::all();
        $categories = Category::all();
        $new_product = Product::orderBy('created_at', 'ASC')->limit(10)->get();
        return view('livewire.home-component',compact('products','categories','new_product'))->layout('layouts.base');
    }
}
