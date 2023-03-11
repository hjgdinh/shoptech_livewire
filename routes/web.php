<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\DetailComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ThankYouComponent;
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
use App\Http\Livewire\Admin\Order\AdminOrderComponent;
use App\Http\Livewire\Admin\Order\AdminOrderDetailComponent;
use App\Http\Livewire\Admin\Contact\AdminContactComponent;
use App\Http\Livewire\User\ContactComponent;
use App\Http\Livewire\User\CategoryComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\ProfileComponent;
use App\Http\Livewire\User\ChangePasswordComponent;
use App\Http\Livewire\UserOrderDetailComponent;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', HomeComponent::class)->name('home.component');   

Route::get('/shop', ShopComponent::class)->name('shop.component');  
Route::get('/shop/detail/{slug?}', DetailComponent::class)->name('detail.product');  
Route::get('/shop-category/{slug?}', CategoryComponent::class)->name('shop.category');  

Route::get('/cart', CartComponent::class)->name('cart.component');

Route::get('/about', AboutComponent::class)->name('about.component');  

Route::get('/search', SearchComponent::class)->name('header.search');  

Route::get('/checkout', CheckoutComponent::class)->name('checkout');  

Route::get('/thankyou', ThankYouComponent::class)->name('thankyou.component'); 

Route::get('/contact', ContactComponent::class)->name('contact.component');  

/* ADMIN */
Route::group(['prefix' => 'admin','middleware' => ['auth:sanctum','verified','authadmin']], function() {
    Route::get('/', AdminDashboardComponent::class);
    Route::get('/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/profile/{id}', AdminProfileComponent::class)->name('admin.profile');
    // user
    Route::get('/users', AdminUserComponent::class)->name('admin.user');
    Route::get('/users/add', AdminAddUserComponent::class)->name('admin.adduser');
    Route::get('/users/edit/{id}', AdminEditUserComponent::class)->name('admin.edituser');
    // product
    Route::get('/products', AdminProductComponent::class)->name('admin.product');
    Route::get('/products/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/products/edit/{id}', AdminEditProductComponent::class)->name('admin.editproduct');
    // category
    Route::get('/categories', AdminCategoryComponent::class)->name('admin.category');
    Route::get('/categories/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/categories/edit/{id}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/subcategories/edit/{id}', AdminEditSubCategoryComponent::class)->name('admin.editsubcategory');
    // order
    Route::get('/orders', AdminOrderComponent::class)->name('admin.order');
    Route::get('/orders/{order_id}', AdminOrderDetailComponent::class)->name('admin.orderdetail');
    // Contact
    Route::get('/contacts', AdminContactComponent::class)->name('admin.contact');
});

/* CLIENT */
Route::group(['prefix' => 'user','middleware' => ['auth:sanctum','verified']], function() {
    Route::get('/dashboard', UserDashboardComponent::class)->name('user.dashboard');
    // order
    Route::get('/orders/{order_id}', UserOrderDetailComponent::class)->name('user.orderdetail');
    // pw
    Route::get('/change-password', ChangePasswordComponent::class)->name('user.changepw');
    // profile
    Route::get('/profile/{id}', ProfileComponent::class)->name('user.profile');
});


