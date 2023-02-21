<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Category;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $countuser = Customer::where('utype', 'USR');
        $countproduct = Product::all();
        $countcategories = Category::all();

        return view('livewire.admin.admin-dashboard-component',compact('countuser','countproduct','countcategories'))
        ->layout('layouts.admin');
    }
}
