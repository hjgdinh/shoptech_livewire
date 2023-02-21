<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Customer;

class AdminUserComponent extends Component
{
    use WithPagination;

    public $search;
    public $sorting;
    public $pagesize;

    public function deleteUser($id) {
        $user = Customer::find($id);
        $user->delete();
        session()->flash('message', 'Xóa thành công');
    }

    public function mount() {
        $this->pagesize = 5;
        $this->sorting = "deflaut";
    }

    public function render()
    {
        $search = '%' . $this->search . '%';
        if($this->sorting == "price-desc") {
            $users = Customer::where('name', 'like', $search )->orWhere('email', 'like', $search )->orderBy('id', 'DESC')->paginate($this->pagesize);
        }
        else if($this->sorting == "price-asc") {
            $users = Customer::where('name', 'like', $search )->orWhere('email', 'like', $search )->orderBy('id', 'ASC')->paginate($this->pagesize);
        }
        else {
            $users = Customer::where('name', 'like', $search )->orWhere('email', 'like', $search )->paginate($this->pagesize);
        }       
        return view('livewire.admin.users.admin-user-component', compact('users'))->layout('layouts.admin');
    }   
}
