<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Product;
use App\Models\admin\Category;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Requests\CreateValidationRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::all();  

        // $cate_id = Product::select('category_id')->get();  
        // $cate = Category::query()->select('id')->get(); 
  
        return view('livewire.admin.products.index', compact('products'));
    }
}
