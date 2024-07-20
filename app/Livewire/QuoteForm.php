<?php

namespace App\Livewire;

use App\Mail\QuoteMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class QuoteForm extends Component
{
    public $name;
    public $email;
    public $phone;
    
    public $message;

    protected $rules = [
        "name"=> "required | string | min:3 | max:25",
        "email"=> "required | email | max:255",
        "phone"=> "required | numeric | min:10 ",
        "message"=> "required | string | max:255",
    ];
    public function render()
    {
        return view('livewire.quote-form');
    }

    public function send(){
        
        $validatedDate = $this->validate();

        try {
            Mail::to('info@mthyelectrical.co.za')->send(new QuoteMail($validatedDate));          
            Session()->flash('success', 'Thank you, our agent will contact you.'); 

        } catch (\Throwable $th) {     
            Session()->flash('error', 'Failed, Pleae try again.');    
        }
     
        $this->reset();
    }

}
