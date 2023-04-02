<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
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
//
//        $contact['name'] = $this->name;
//        $contact['email'] = $this->email;
//        $contact['message'] = $this->message;

//        sleep(5);
        Mail::to(env('MAIL_TO'))->send(new ContactFormMailable($contact));

//        $this->successMessage = 'We received your message successfully and will get back to you shortly!';
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
        return view('livewire.contact-form');
    }
}
