<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class AdminOrderComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $orders = Order::orderBy('id', 'ASC')->paginate(5);
        return view('livewire.admin.order.admin-order-component',compact('orders'))->layout('layouts.admin');
    }
}
