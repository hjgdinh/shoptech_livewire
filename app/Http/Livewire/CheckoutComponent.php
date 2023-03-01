<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckoutComponent extends Component
{
    public $fname;
    public $lname;
    public $company;
    public $address;
    public $s_address;
    public $city;
    public $state;
    public $zipcode;
    public $phone;
    public $email;
    public $note;
    public $payment_method;   

    public function render()
    {
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
