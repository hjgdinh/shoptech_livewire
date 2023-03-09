<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Variant;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Http\File;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;

    public $product_id;
    public $name;
    public $slug;
    public $price;
    public $description;
    public $category_id;
    public $image;
    // varants
    public $varant;
    public $monitor;
    public $operating;
    public $camera_behind;
    public $camera_front;
    public $chip;
    public $ram;
    public $storage;
    public $sim;
    public $battery;
    public $cpu;
    public $drive;
    public $graphic;
    public $connector;
    public $design;
    public $size;
    public $release_time;

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

    public function mount()
    {
        $this->category_id = '';
    }

    public function autoSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function removeMe($index)
    {
        array_splice($this->image, $index, 1);
    }

    public function addProduct()
    {
        $this->validate();

        foreach ($this->image as $key => $image) {
            $this->image[$key] = $image->store('/products', 'images');
        }

        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->price = $this->price;
        $product->description = $this->description;
        $product->category_id = $this->category_id;
        $product->image = $this->image;
        $product->save();
        $this->image = "";

        $variantProduct = new Variant();
        $variantProduct->product_id = $product->id;
        $variantProduct->monitor = $this->monitor;
        $variantProduct->operating = $this->operating;
        $variantProduct->camera_behind = $this->camera_behind;
        $variantProduct->camera_front = $this->camera_front;
        $variantProduct->chip = $this->chip;
        $variantProduct->ram = $this->ram;
        $variantProduct->storage = $this->storage;
        $variantProduct->sim = $this->sim;
        $variantProduct->battery = $this->battery;
        $variantProduct->cpu = $this->cpu;
        $variantProduct->drive = $this->drive;
        $variantProduct->graphic = $this->graphic;
        $variantProduct->connector = $this->connector;
        $variantProduct->design = $this->design;
        $variantProduct->size = $this->size;
        $variantProduct->release_time = $this->release_time;
        $variantProduct->save();

        session()->flash('message', 'Tạo thành công');
        return redirect()->route('admin.product');
    }

    public function render()
    {
        $category = Category::where('parent_id', 0)->with(['children'])->get();
        return view('livewire.admin.product.admin-add-product-component', [
            'category' => $category,
        ])->layout('layouts.admin');
    }
}
