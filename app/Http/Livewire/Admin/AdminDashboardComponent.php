<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $countusers = Customer::where('utype', 'USR');
        $countproducts = Product::all();
        $countcategories = Category::all();
        $countcontacts = Contact::all();
        $countorders = Order::all();

        return view('livewire.admin.admin-dashboard-component',compact('countusers','countproducts','countcategories'
        ,'countcontacts','countorders'))
        ->layout('layouts.admin');
    }
}
