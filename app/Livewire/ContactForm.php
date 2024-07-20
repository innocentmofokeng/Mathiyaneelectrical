<?php

namespace App\Livewire;

use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Facades\Session; // Ensure to import the Session facade

class ContactForm extends Component
{
    public $name;
    public $phone;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required|string|min:3|max:25',
        'phone' => 'required|min:10',
        'subject' => 'required|string|min:5|max:50',
        'message' => 'required|string|min:5|max:255',
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function send()
    {
        $validatedData = $this->validate();

        try {
            Mail::to('info@mthyelectrical.co.za')->send(new ContactUsMail($validatedData));

            Session::flash('success', 'Thank you ' . $this->name . '! Message sent successfully!');

        } catch (\Throwable $th) {
            Session::flash('error', 'Failed, please try again.');
        }

        $this->reset();
    }
}
