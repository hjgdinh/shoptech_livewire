<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;
use Cart;

class SearchComponent extends Component
{

    use WithPagination;

    public $search;
    public $sorting;
    public $pagesize;
    
    public function store() {

    }

    public function mount() {
        $this->pagesize = 6;
        $this->sorting = "deflaut";
    }

    public function render()
    {
        $category = Category::where('parent_id', 0)->with(['children'])->get();
        if($this->sorting == "price-desc") {
            $products = Product::where('name', 'like','%'.$this->search.'%')->orderBy('price', 'DESC')->paginate($this->pagesize);
        }
        else if($this->sorting == "price-asc") {
            $products = Product::where('name', 'like','%'.$this->search.'%')->orderBy('price', 'ASC')->paginate($this->pagesize);
        }
        else {
            $products = Product::where('name', 'like','%'.$this->search.'%')->paginate($this->pagesize);
        }       
        return view('livewire.search-component', compact('products'))->layout('layouts.base');
    }
}
