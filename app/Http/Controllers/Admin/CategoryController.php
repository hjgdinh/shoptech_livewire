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

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();  
  
        return view('admin.category.index', compact('category'));
    }
}
