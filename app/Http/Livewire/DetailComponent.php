<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Variant;

class DetailComponent extends Component
{
    public $slug;
    public $quick_view;
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

    public function quickView($id) {
        $this->quick_view = $id;
    }

    public function addToCart($product_id)
    {
        $product = Product::findOrFail($product_id);
        if (isset($product->image)) {
            Cart::instance('cart')->add(
                $product->id,
                $product->name,
                $this->quantity[$product_id], // quantity
                $product->price,
                ['image' => $product->image[0]]
            );
        } else {
            Cart::instance('cart')->add(
                $product->id,
                $product->name,
                $this->quantity[$product_id], // quantity
                $product->price
            );
        }
        session()->flash('message', 'Thêm vào giỏ thành công');
        return redirect()->route('shop.component');
        $this->emit('cart_updated');
    }

    public function render()
    {
        $category = Category::where('parent_id', 0)->with(['children'])->get();
        $product = Product::where('slug', $this->slug)->first();
        $variant = Variant::where('product_id', $product->id)->first();
        $new_product = Product::inRandomOrder()->limit(3)->get();
        $related = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(5)->get();
        return view('livewire.detail-component', compact('product','category','related','new_product','variant'))
        ->layout('layouts.base');
    }
}
