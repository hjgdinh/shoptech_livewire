<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShopComponent extends Component
{
    use WithPagination;

    public $search;
    public $orderBy = "Deflaut Sorting";
    public $pageSize = 12;
    
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
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
        return view('livewire.shop-component', compact('products','category'))->layout('layouts.base');
    }
}
