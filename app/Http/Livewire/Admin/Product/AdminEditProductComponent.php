<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Variant;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

use function PHPUnit\Framework\isNull;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;

    public $product_id; // id of product
    public $name;
    public $slug;
    public $price;
    public $description;
    public $category_id;
    public $image;
    public $state = [];
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

    public function mount($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        $this->state = $product->toArray();
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->category_id = $product->category_id;
        $this->image = $product->image;
        $this->reset('image');
        // variant
        $variantProduct = Variant::where('product_id', $product->id)->firstOrFail();
        $this->monitor = $variantProduct->monitor;
        $this->operating = $variantProduct->operating;
        $this->camera_behind = $variantProduct->camera_behind;
        $this->camera_front = $variantProduct->camera_front;
        $this->chip = $variantProduct->chip;
        $this->ram = $variantProduct->ram;
        $this->storage = $variantProduct->storage;
        $this->sim = $variantProduct->sim;
        $this->battery = $variantProduct->battery;
        $this->cpu = $variantProduct->cpu;
        $this->drive = $variantProduct->drive;
        $this->graphic = $variantProduct->graphic;
        $this->connector = $variantProduct->connector;
        $this->design = $variantProduct->design;
        $this->size = $variantProduct->size;
        $this->release_time = $variantProduct->release_time;
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
     
        $product = Product::find($this->product_id);

        if ($this->image) {
            foreach($product->image as $img) {
                if ($img) {
                    unlink('images' . '/' . $img);                   
                }
            };
            foreach ($this->image as $key => $image) {
                $this->image[$key] = $image->store('/products', 'images');
            }
        }

        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->price = $this->price;
        $product->description = $this->description;
        $product->category_id = $this->category_id;
        $product->image = $this->image;
        $product->save();
        $this->image = "";

        $variantProduct = Variant::where('product_id', $product->id)->firstOrFail();
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

        session()->flash('message', 'Sửa thành công');
        return redirect()->route('admin.product');
    }

    public function render()
    {
        $category = Category::where('parent_id', 0)->with(['children'])->get();
        return view('livewire.admin.product.admin-edit-product-component', compact('category'))->layout('layouts.admin');
    }
}
