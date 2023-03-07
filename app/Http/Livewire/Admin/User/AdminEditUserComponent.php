<?php

namespace App\Http\Livewire\Admin\User;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\Customer;
use Livewire\WithFileUploads;

class AdminEditUserComponent extends Component
{
    use WithFileUploads;
    public $user_id; // id of user
    public $name;
    public $email;
    public $password;
    public $phone;
    public $address;
    public $gender;
    public $utype;
    public $avatar;
    public $state = [];

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
        'avatar' => 'Ảnh đại diện',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id)
    {
        $user = Customer::where('id', $id)->first();
        $this->state = $user->toArray();
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->phone = $user->phone;
        $this->address = $user->address;
        $this->gender = $user->gender;
        $this->utype = $user->utype;
        $this->reset('avatar');               
    }
    
    public function updateUser()
    {
        $this->validate();
        $form = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'phone' => $this->phone,
            'address' => $this->address,
            'gender' => $this->gender,
            'utype' => $this->utype,
            'avatar' => $this->avatar->store('/users', 'images'),
        ];
        $user = Customer::find($this->user_id);
        $user->update($form);
        session()->flash('message', 'Sửa thành công');
        // return redirect()->route('admin.user');
    }

    public function render()
    {
        return view('livewire.admin.users.admin-edit-user-component')->layout('layouts.admin');
    }
}
