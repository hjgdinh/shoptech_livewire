<?php

namespace App\Http\Livewire\User;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $telephone;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'telephone' => 'required',
        'subject' => 'required',
        'message' => 'required',
    ];

    protected $messages = [
        'required' => ':attribute không được để trống.',
        'unique' => ':attribute đã tồn tại.',
        'email' => ':attribute không hợp lệ. VD: ...@gmail.com',
    ];

    protected $validationAttributes = [
        'name' => 'Tên',
        'email' => 'Email',
        'telephone' => 'Số điện thoại',
        'subject' => 'Tiêu đề',
        'message' => 'Tin nhắn',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function sendContact() {
        
        $this->validate();

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->telephone;
        $contact->subject = $this->subject;
        $contact->message = $this->message;

        $contact->save();
        session()->flash('message', 'Gửi tin nhắn thành công');
        return redirect()->route('contact.component');
    }

    public function render()
    {
        return view('livewire.user.contact-component')->layout('layouts.base');
    }
}
