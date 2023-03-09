<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;

class AdminProductComponent extends Component
{
    use WithPagination;

    public $search;
    public $sorting;
    public $pagesize;

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if ($product->image) {
            foreach ($product->image as $img) {
                if ($img) {
                    unlink('images' . '/' . $img);
                }
            }
        }
        $product->delete();
        session()->flash('message', 'Xóa thành công');
    }

    public function mount()
    {
        $this->pagesize = 5;
        $this->sorting = "deflaut";
    }

    public function render()
    {
        $category = Category::where('parent_id', 0)->with(['children'])->get();
        if ($this->sorting == "price-desc") {
            $products = Product::where('name', 'like', '%' . $this->search . '%')->orderBy('price', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == "price-asc") {
            $products = Product::where('name', 'like', '%' . $this->search . '%')->orderBy('price', 'ASC')->paginate($this->pagesize);
        } else {
            $products = Product::where('name', 'like', '%' . $this->search . '%')->paginate($this->pagesize);
        }
        return view('livewire.admin.product.admin-product-component', [
            'products' => $products,
        ])->layout('layouts.admin');
    }
}
