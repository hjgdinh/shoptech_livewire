<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;

class AdminCategoryComponent extends Component
{
    use WithPagination;

    public $search;
    public $sorting;
    public $pagesize;
    public $name;

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        $category->children()->delete();
        session()->flash('message', 'Xóa thành công');
    }

    public function deleteSubCategory($id)
    {
        $subcategory = Category::find($id);
        $subcategory->delete();
        session()->flash('message', 'Xóa thành công');
    }    

    public function mount()
    {
        $this->pagesize = 5;
        $this->sorting = "deflaut";
    }

    public function render()
    {
        if ($this->sorting == "parent") {
            $category = Category::where('name', 'like', '%' . $this->search . '%')->paginate($this->pagesize);
        } else if ($this->sorting == "child") {
            $category = Category::where('name', 'like', '%' . $this->search . '%')->where('parent_id','<>','0')->paginate($this->pagesize);
        } else {
            $category = Category::where('name', 'like', '%' . $this->search . '%')->where('parent_id', 0)->paginate($this->pagesize);
        }
        return view('livewire.admin.category.admin-category-component', [
            'category' => $category,
        ])->layout('layouts.admin');
    }
}
