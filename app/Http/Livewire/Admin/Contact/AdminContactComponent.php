<?php

namespace App\Http\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class AdminContactComponent extends Component
{
    use WithPagination;

    public function deleteContact($id) {
        $contact = Contact::find($id);
        $contact->delete();
        session()->flash('message', 'Xóa thành công');
    }

    public function render()
    {
        $contacts = Contact::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.contact.admin-contact-component',compact('contacts'))->layout('layouts.admin');
    }
}
