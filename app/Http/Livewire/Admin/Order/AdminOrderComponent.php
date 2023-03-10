<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class AdminOrderComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function updateStatus($order_id, $status)
    {
        $order = Order::findOrFail($order_id);
        $order->status = $status;
        if ($status == 2) {
            DB::table('orders')->where('id', $order->id)->update([
                'status' => 2,
            ]);
        } else if ($status == 3) {
            DB::table('orders')->where('id', $order->id)->update([
                'status' => 3 ,
            ]);
        }
        session()->flash('message', 'Thay đổi trạng thái đơn hàng thành công');
    }

    public function render()
    {
        $orders = Order::orderBy('id', 'ASC')->paginate(5);
        return view('livewire.admin.order.admin-order-component', compact('orders'))->layout('layouts.admin');
    }
}
