<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class AdminEditSubCategoryComponent extends Component
{
    public $subcategory_id;
    public $parent_id;
    public $name;
    public $slug;
    protected $rules = [
        'name' => 'required',
        'parent_id' => 'required',
        'subcategory_id' => 'required',
    ];

    protected $messages = [
        'required' => ':attribute không được trống.',
        'unique' => ':attribute đã tồn tại.',
    ];

    protected $validationAttributes = [
        'name' => 'Tên',
        'slug' => 'Slug',
        'subcategory_id' => 'Loại sản phẩm',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id)
    {
        $subcategory = Category::find($id);
        $this->parent_id = $subcategory->parent_id;
        $this->subcategory_id = $subcategory->id;
        $this->name = $subcategory->name;
        $this->slug = $subcategory->slug;
    }

    public function autoSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updateSubCategory()
    {
        $this->validate();
        $form = [
            'name' => $this->name,
            'slug' => $this->slug,
            'parent_id' => $this->parent_id,
        ];
        $subcategory = Category::find($this->subcategory_id);
        $subcategory->update($form);
        session()->flash('message', 'Sửa thành công');
    }

    public function render()
    {
        $category = Category::where('parent_id', 0)->with(['children'])->get();
        return view('livewire.admin.category.admin-edit-sub-category-component', [
            'category' => $category,
        ])->layout('layouts.admin');
    }
}
