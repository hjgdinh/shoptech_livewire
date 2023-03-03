<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $orders = Order::where('user_id', Auth::user()->id)->paginate(5);
        return view('livewire.user.user-dashboard-component',compact('orders'))->layout('layouts.base');
    }
}
