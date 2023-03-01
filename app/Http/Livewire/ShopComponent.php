<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class ShopComponent extends Component
{
    use WithPagination;

    public $search;
    public $orderBy = "Deflaut Sorting";
    public $pageSize = 12;
    
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

    public function changePageSize($size) {
        $this->pageSize = $size;
    }

    public function changeOrderBy($order) {
        $this->orderBy = $order;
    }

    public function render()
    {
        $category = Category::where('parent_id', 0)->with(['children'])->get();
        if($this->orderBy == 'DESC') {
            $products = Product::orderBy('price', 'DESC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'ASC') {
            $products = Product::orderBy('price', 'ASC')->paginate($this->pageSize);
        }
        else {
            $products = Product::paginate($this->pageSize);
        }     
        
        if (Auth::check()) {
            Cart::instance('cart')->store(Auth::user()->email);
        }
        
        return view('livewire.shop-component', compact('products','category'))->layout('layouts.base');
    }
}
