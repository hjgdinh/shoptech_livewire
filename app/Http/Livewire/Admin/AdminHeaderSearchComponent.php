<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Customer;

class AdminHeaderSearchComponent extends Component
{
    public $search;

    public function render()
    {
        $users = Customer::where('name', 'like','%'.$this->search.'%');
        return view('layouts.admin');
    }
}
