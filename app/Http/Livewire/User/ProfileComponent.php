<?php

namespace App\Http\Livewire\User;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ProfileComponent extends Component
{
    use WithFileUploads;

    public $user_id; // id of user
    public $name;
    public $email;
    public $address;
    public $phone;
    public $avatar;
    public $state = [];

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'address' => 'required',
        'phone' => 'numeric',
        'avatar' => 'image|max:2048',
    ];

    protected $messages = [
        'required' => ':attribute không được trống.',
        'email' => ':attribute không hợp lệ. VD: ...@gmail.com',
        'unique' => ':attribute đã tồn tại.',
        'max' => ':attribute tối thiếu là 2MB. Vui lòng thử lại',
    ];

    protected $validationAttributes = [
        'name' => 'Tên',
        'email' => 'Email',
        'address' => 'Địa chỉ',
        'phone' => 'Số điện thoại',
        'avatar' => 'Ảnh đại diện',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id)
    {
        if(Auth::user()->id != $id) {
            return redirect()->route('user.dashboard');
        }      
        $user = Customer::where('id', $id)->first();
        $this->state = $user->toArray();
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->address = $user->address;
        $this->phone = $user->phone;
        $this->avatar = $user->avatar;
        $this->reset('avatar');   
    }

    public function updateProfile()
    {
        $this->validate();
        $user = Customer::find($this->user_id);
        if ($this->state['avatar_url'] != url('images/deflaut/deflaut_avatar.png')) {
            unlink('images' . '/' . $user->avatar);
        }
        $user->name = $this->name;
        $user->email = $this->email;
        $user->address = $this->address;
        $user->avatar = $this->avatar->store('/users', 'images');
        $user->save();
        // $this->avatar = "";
        session()->flash('message', 'Sửa thành công');
    }

    public function render()
    {
        return view('livewire.user.profile-component')->layout('layouts.base');
    }
}
