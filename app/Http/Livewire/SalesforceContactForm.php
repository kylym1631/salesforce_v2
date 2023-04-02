<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class SalesforceContactForm extends Component
{
    public $name;
    public $email;
    public $message;
//    public $successMessage;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:5',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $contact = $this->validate();
        Mail::to(env('MAIL_TO'))->send(new ContactFormMailable($contact));

        session()->flash('success_message','We received your message successfully and will get back to you shortly!');
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }
    public function render()
    {
        return view('livewire.salesforce-contact-form');
    }
}
