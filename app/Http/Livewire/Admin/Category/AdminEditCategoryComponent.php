<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class AdminEditCategoryComponent extends Component
{
    public $category_id;
    public $name;
    public $slug;
    protected $rules = [
        'name' => 'required',
        'category_id' => 'required',
    ];

    protected $messages = [
        'required' => ':attribute không được trống.',
        'unique' => ':attribute đã tồn tại.',
    ];

    protected $validationAttributes = [
        'name' => 'Tên',
        'slug' => 'Slug',
        'category_id' => 'Loại sản phẩm',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id)
    {
        $category = Category::where('id', $id)->first();
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
    }

    public function autoSlug() {
        $this->slug = Str::slug($this->name);
    }

    public function updateCategory()
    {
        $this->validate();
        $form = [
            'name' => $this->name,
            'slug' => $this->slug,
        ];
        $category = Category::find($this->category_id);
        $category->update($form);
        session()->flash('message', 'Sửa thành công');
    }

    public function render()
    {
        return view('livewire.admin.category.admin-edit-category-component')->layout('layouts.admin');
    }
}
