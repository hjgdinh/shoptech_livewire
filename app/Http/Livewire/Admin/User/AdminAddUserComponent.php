<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Customer;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class AdminAddUserComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $password;
    public $phone;
    public $address;
    public $gender;
    public $utype;
    public $avatar;

    public function mount()
    {
        $this->utype = "USR";
    }
    
    protected $rules = [
        'name' => 'required|min:5',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'address' => 'required',
        'gender' => 'required',
        'utype' => 'required',
        'avatar' => 'image|max:2048',
    ];

    protected $messages = [
        'required' => ':attribute không được trống.',
        'email' => ':attribute không hợp lệ. VD: ...@gmail.com',
        'unique' => ':attribute đã tồn tại.',
        'max' => ':attribute tối thiếu là 2MB. Vui lòng thử lại',
    ];

    protected $validationAttributes = [
        'email' => 'Địa chỉ Email',
        'name' => 'Tên',
        'password' => 'Mật khẩu',
        'address' => 'Địa chỉ',
        'gender' => 'Giới tính',
        'utype' => 'Quyền',
        'unique' => 'Địa chỉ email',
        'avatar' => 'Ảnh đại diện',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addUser()
    {
        $this->validate();

        $user = Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'phone' => $this->phone,
            'address' => $this->address,
            'gender' => $this->gender,
            'utype' => $this->utype,
            'avatar' => $this->avatar->store('/users','images'),
        ]);
        $user->save();
        session()->flash('message', 'Tạo thành công');
        return redirect()->route('admin.user');
    }

    public function render()
    {
        return view('livewire.admin.users.admin-add-user-component')->layout('layouts.admin');
    }
}
