<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use Illuminate\Support\Str;


class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;
    public $parent_id;

    public function mount() {
        $this->parent_id = 0;
    }

    public function autoSlug() {
        $this->slug = Str::slug($this->name);
    }

    public function addProduct()
    {
        $product = New Category();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->parent_id = $this->parent_id;
        $product->save();
        session()->flash('message', 'Tạo thành công');
        return redirect()->route('admin.category');
    }

    public function render()
    {
        $category = Category::where('parent_id', 0)->with(['children'])->get();
        return view('livewire.admin.category.admin-add-category-component',[
            'category' => $category,
        ])->layout('layouts.admin');
    }
}
