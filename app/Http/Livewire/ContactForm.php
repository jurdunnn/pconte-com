<?php

namespace App\Http\Livewire;

use App\Models\ContactForm as Contact;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ContactForm extends Component
{
    public Contact $form;

    protected $rules = [
        'form.name' => 'required|string',
        'form.email' => 'required|email',
        'form.reference' => 'nullable|string',
        'form.message' => 'required|string|max:255',
    ];

    public function mount()
    {
        $this->form = new Contact();
    }

    public function render()
    {
        return view('livewire.contact-form')
            ->extends('layouts.app')
            ->section('livewire-content');
    }

    public function submit()
    {
        $this->validate();

        $this->form->save();
    }
}
