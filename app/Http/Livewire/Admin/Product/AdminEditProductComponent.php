<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;

    public $product_id; // id of product
    public $name;
    public $slug;
    public $price;
    public $description;
    public $category_id;
    public $image = [];
    public $state = [];

    protected $rules = [
        'name' => 'required',
        'price' => 'required',
        'description' => 'required',
        'category_id' => 'required',
        'image.*' => 'image|max:2048',
    ];

    protected $messages = [
        'required' => ':attribute không được trống.',
        'unique' => ':attribute đã tồn tại.',
        'max' => ':attribute tối thiếu là 2MB. Vui lòng thử lại',
    ];

    protected $validationAttributes = [
        'name' => 'Tên',
        'price' => 'Giá',
        'description' => 'Mô tả',
        'category_id' => 'Loại sản phẩm',
        'image.*' => 'Ảnh',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id)
    {
        $product = Product::where('id', $id)->first();
        $this->state = $product->toArray();
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->category_id = $product->category_id;
        $this->image = $product->image;
        $this->reset('image');
    }

    public function autoSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function removeMe($index)
    {
        array_splice($this->image, $index, 1);
    }

    public function updateProduct()
    {
        $this->validate();

        foreach ($this->image as $key => $image) {
            $this->image[$key] = $image->store('/', 'images');
        }

        $form = [
            'name' => $this->name,
            'slug' => $this->slug,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'image' => $this->image,
        ];
        $product = Product::find($this->product_id);
        $product->update($form);
        $this->image = "";
        session()->flash('message', 'Sửa thành công');
        return redirect()->route('admin.product');
    }

    public function render()
    {
        $category = Category::where('parent_id', 0)->with(['children'])->get();
        return view('livewire.admin.product.admin-edit-product-component', [
            'category' => $category,
        ])->layout('layouts.admin');
    }
}
