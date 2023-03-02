<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CategoryComponent extends Component
{
    use WithPagination;

    public $search;
    public $orderBy = "Deflaut Sorting";
    public $pageSize = 12;
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

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

    public function changePageSize($size)
    {
        $this->pageSize = $size;
    }

    public function changeOrderBy($order)
    {
        $this->orderBy = $order;
    }

    public function render()
    {
        $cate = Category::where('slug', $this->slug)->first();
        $category_id = $cate->id;
        $parent_id = $cate->parent_id;

        if ($this->orderBy == 'DESC') {
            $products = Product::where('category_id', $category_id)->orderBy('price', 'DESC')->paginate($this->pageSize);
        } 
        else if ($this->orderBy == 'ASC') {
            $products = Product::where('category_id', $category_id)->orderBy('price', 'ASC')->paginate($this->pageSize);
        } 
        else if ($parent_id == 0) {
            $products = Category::find($cate->id)->products()->paginate($this->pageSize);
        } 
        else {
            $products = Product::where('category_id', $category_id)->paginate($this->pageSize);
        }

        $category = Category::where('parent_id', 0)->with(['children'])->get();
        $new_product = Product::inRandomOrder()->limit(3)->get();

        if (Auth::check()) {
            Cart::instance('cart')->store(Auth::user()->email);
        }

        return view('livewire.user.category-component', compact('products', 'category', 'new_product'))->layout('layouts.base');
    }
}
