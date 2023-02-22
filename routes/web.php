<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminProfileComponent;
use App\Http\Livewire\Admin\User\AdminUserComponent;
use App\Http\Livewire\Admin\User\AdminAddUserComponent;
use App\Http\Livewire\Admin\User\AdminEditUserComponent;
use App\Http\Livewire\Admin\Product\AdminProductComponent;
use App\Http\Livewire\Admin\Product\AdminAddProductComponent;
use App\Http\Livewire\Admin\Product\AdminEditProductComponent;
use App\Http\Livewire\Admin\Category\AdminCategoryComponent;
use App\Http\Livewire\Admin\Category\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\Category\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\Category\AdminEditSubCategoryComponent;
use App\Http\Livewire\User\UserDashboardComponent;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', HomeComponent::class);   

Route::get('/shop', ShopComponent::class);    

/* ADMIN */
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function() {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/profile/{id}', AdminProfileComponent::class)->name('admin.profile');
    // user
    Route::get('/admin/users', AdminUserComponent::class)->name('admin.user');
    Route::get('/admin/users/add', AdminAddUserComponent::class)->name('admin.adduser');
    Route::get('/admin/users/edit/{id}', AdminEditUserComponent::class)->name('admin.edituser');
    // product
    Route::get('/admin/products', AdminProductComponent::class)->name('admin.product');
    Route::get('/admin/products/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/products/edit/{id}', AdminEditProductComponent::class)->name('admin.editproduct');
    // category
    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.category');
    Route::get('/admin/categories/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/categories/edit/{id}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/subcategories/edit/{id}', AdminEditSubCategoryComponent::class)->name('admin.editsubcategory');
});

/* CLIENT */
Route::middleware(['auth:sanctum','verified'])->group(function() {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');

    // view customer
    Route::get('/customers', [CustomersController::class, 'customer_login'])->name('customers.index');
    // create customer
    Route::get('/customers_register', [CustomersController::class, 'customer_index'])->name('customers.regiter');
    Route::post('/customers_register', [CustomersController::class, 'store'])->name('customers.store');
    // update customer
    Route::get('customers/edit/{id}', [CustomersController::class, 'edit'])->name('customers.edit');
    Route::put('customers/edit/{id}', [CustomersController::class, 'update'])->name('customers.update');
    // delete customer
    Route::delete('customers/{id}', [CustomersController::class, 'destroy'])->name('customers.delete');
    // login customer
    // Route::get('/customers', [CustomersController::class, 'customer_login'])->name('customers.login.view');
    Route::post('/customers', [CustomersController::class, 'login'])->name('customers.login');
    Route::get('/logout', [CustomersController::class, 'getLogout'])->name('customers.logout');
});


