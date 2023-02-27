<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
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

    public function increaseQuantity($rowId) {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
        return redirect()->route('cart.component');
    }

    public function decreaseQuantity($rowId) {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
        return redirect()->route('cart.component');
    }

    public function destroy($rowId) {
        Cart::remove($rowId);
        session()->flash('message','xóa thành công');
        return redirect()->route('cart.component');
        $this->emit('cart_updated');
    }

    public function clearAll() {
        Cart::destroy();
        return redirect()->route('cart.component');
        $this->emit('cart_updated');
    }

    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
