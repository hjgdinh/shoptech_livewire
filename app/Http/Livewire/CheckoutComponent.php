<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Encore\Admin\Middleware\Session;
use Livewire\Component;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutComponent extends Component
{
    public $fname;
    public $lname;
    public $company;
    public $address;
    public $s_address;
    public $city;
    public $country;
    public $zipcode;
    public $phone;
    public $email;
    public $note;
    public $payment_method;
    public $thankyou;

    protected $rules = [
        'fname' => 'required|',
        'lname' => 'required|',
        'company' => '',
        'address' => 'required|',
        's_address' => '',
        'city' => 'required|',
        'country' => 'required|',
        'zipcode' => 'required|',
        'phone' => 'required|',
        'email' => 'required|email',
        'note' => '',
        'payment_method' => 'required',
    ];

    protected $messages = [
        'required' => ':attribute không được để trống.',
        'unique' => ':attribute đã tồn tại.',
        'email' => ':attribute không hợp lệ. VD: ...@gmail.com',
    ];

    protected $validationAttributes = [
        'fname' => 'Tên',
        'lname' => 'Họ',
        'company' => 'Tên công ty',
        'address' => 'Địa chỉ',
        's_address' => 'Địa chỉ phụ',
        'city' => 'Thành phố',
        'country' => 'Quốc gia',
        'zipcode' => 'Mã bưu điện',
        'phone' => 'Số điện thoại',
        'email' => 'Email',
        'note' => 'Ghi chú',
        'payment_method' => 'Phương thức thanh toán',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function placeOrder()
    {
        $this->validate();

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $total = 0;
        foreach (Cart::instance('cart')->content() as $item) {
            $total += $item->qty * $item->price;
        }
        $order->subtotal = session()->get('checkout')['subtotal'] ?? true;
        $order->total = $total;
        $order->first_name = $this->fname;
        $order->last_name = $this->lname;
        $order->company = $this->company;
        $order->address = $this->address;
        $order->s_address = $this->s_address;
        $order->city = $this->city;
        $order->country = $this->country;
        $order->zip = $this->zipcode;
        $order->phone = $this->phone;
        $order->email = $this->email;
        $order->note = $this->note;
        $order->payment_method = $this->payment_method;
        $order->save();

        foreach (Cart::instance('cart')->content() as $item) {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }

        $this->thankyou = 1;
        Cart::instance('cart')->destroy();
        session()->forget('checkout');
        // return redirect()->route('thankyou.component');
    }

    public function verifyCheckout()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        } 
        else if ($this->thankyou) {
            return redirect()->route('thankyou.component');
        } 
    }

    public function render()
    {
        $this->verifyCheckout();
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
