<?php

namespace App\Http\Livewire;

use App\Models\ContactForm as Contact;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ContactForm extends Component
{
    public String $name, $email, $reference, $message;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'reference' => 'string',
        'message' => 'required|string',
    ];

    public function mount()
    {
        $this->name = '';
        $this->email = '';
        $this->reference = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submitForm()
    {
        $this->validate([$this->name]);

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'reference' => $this->reference,
            'message' => $this->message
        ]);
    }
}
