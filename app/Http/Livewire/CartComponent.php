<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Product;

class CartComponent extends Component
{
    public $products;
    public array $quantity = [];

    public function mount()
    {
        $this->products = Product::all();
        foreach ($this->products as $product) {
            $this->quantity[$product->id] = 1;
        }
    }

    public function increaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        $this->emit('cart_updated');
        Cart::instance('cart')->update($rowId, $qty);
        // return redirect()->route('cart.component');
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        $this->emit('cart_updated');
        Cart::instance('cart')->update($rowId, $qty);
    }

    public function destroy($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        session()->flash('message', 'xóa thành công');
        $this->emit('cart_updated');
    }

    public function clearAll()
    {
        Cart::instance('cart')->destroy();
        $this->emit('cart_updated');
    }

    public function checkout()
    {
        if (Auth::check()) {
            return redirect()->route('checkout');
        } else {
            return redirect()->route('login');
        }
    }

    public function render()
    {
        if (Auth::check()) {
            Cart::instance('cart')->store(Auth::user()->email);
        }

        return view('livewire.cart-component')->layout('layouts.base');
    }
}
