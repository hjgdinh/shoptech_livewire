<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddProductComponent extends Component
{
    public $name;
    public $slug;
    public $price;
    public $description;
    public $category_id;
    public $image;

    public function mount() {
        $this->category_id = '';
    }

    public function autoSlug() {
        $this->slug = Str::slug($this->name);
    }

    public function addProduct()
    {
        $product = New Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->price = $this->price;
        $product->description = $this->description;
        $product->category_id = $this->category_id;
        $product->image = $this->image;
        $product->save();
        session()->flash('message', 'Tạo thành công');
        return redirect()->route('admin.product');
    }

    public function render()
    {
        $category = Category::where('parent_id', 0)->with(['children'])->get();
        return view('livewire.admin.product.admin-add-product-component',[
            'category' => $category,
        ])->layout('layouts.admin');
    }
}
