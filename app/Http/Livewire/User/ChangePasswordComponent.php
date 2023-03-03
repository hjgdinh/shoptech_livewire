<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\Order;
use App\Models\User;

class ChangePasswordComponent extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'current_password' => 'required',
        'password' => 'required|confirmed|different:current_password',
    ];

    protected $messages = [
        'required' => ':attribute không được để trống.',
        'different' => ':attribute không được trùng với mật khẩu cũ.',
        'confirmed' => ':attribute phải trùng với nhập lại mật khẩu.',
    ];

    protected $validationAttributes = [
        'current_password' => 'Mật khẩu cũ',
        'password' => 'Mật khẩu mới',
        'password_confirmation' => 'Nhập lại mật khẩu',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function changePw() {
        $this->validate();

        if(Hash::check($this->current_password,Auth::user()->password)) {
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($this->password);
            $user->save();
            session()->flash('message_success', 'Thay đổi mật khẩu thành công');
        } 
        else if (!Hash::check($this->current_password,Auth::user()->password)) {
            session()->flash('message_error', 'Mật khẩu cũ không đúng. Vui lòng thử lại');
        }
        else {
            session()->flash('message_error', 'Thay đổi mật khẩu thất bại. Vui lòng thử lại');
        }
    }

    public function render()
    {
        return view('livewire.user.change-password-component')->layout('layouts.base');
    }
}
