<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class UserOrderDetailComponent extends Component
{
    public $order_id;

    public function mount($order_id) {
        $this->$order_id = $order_id;
    }

    public function render()
    {
        $order = Order::where('user_id', Auth::user()->id)->where('id',$this->order_id)->firstOrFail();
        return view('livewire.user-order-detail-component',compact('order'))->layout('layouts.base');
    }
}
