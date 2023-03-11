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
        $user = Customer::where('id', $id)->firstOrFail();
        $this->state = $user->toArray();
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->phone = $user->phone;
        $this->address = $user->address;
        $this->gender = $user->gender;
        $this->utype = $user->utype;     
        $this->avatar = $user->avatar;     
        $this->reset('avatar');               
    }
    
    public function updateUser()
    {
        $this->validate();
        $user = Customer::find($this->user_id);
        if ($this->state['avatar_url'] != url('images/deflaut/deflaut_avatar.png')) {
            unlink('images' . '/' . $user->avatar);
        }
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->phone = $this->phone;
        $user->address = $this->address;
        $user->gender = $this->gender;
        $user->utype = $this->utype;
        $user->avatar = $this->avatar->store('/users', 'images');
        $user->save();
        session()->flash('message', 'Sửa thành công');
        // return redirect()->route('admin.user');
    }

    public function render()
    {
        return view('livewire.admin.users.admin-edit-user-component')->layout('layouts.admin');
    }
}
