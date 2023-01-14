<?php

namespace App\Http\Livewire;

use App\Models\ContactForm as Contact;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $bookingReference;
    public $message;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'bookingReference' => 'nullable|string',
        'message' => 'required|string|max:255',
    ];

    public function render()
    {
        return view('livewire.contact-form')
            ->extends('layouts.app')
            ->section('content');
    }

    public function submit()
    {
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'reference' => $this->bookingReference,
            'message' => $this->message
        ]);
    }
}
