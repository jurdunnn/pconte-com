<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Illuminate\Support\Collection;
use Livewire\Component;

class Services extends Component
{
    public Collection $services;

    public $selectedType;

    public $searchQuery;

    public function mount()
    {
        $this->setServices();
    }

    public function render()
    {
        return view('livewire.services')
            ->extends('layouts.app')
            ->section('content');
    }

    public function updated()
    {
        $this->setServices();
    }

    private function setServices()
    {
        $services = Service::where('enabled', true)
            ->orderBy('interactions');

        if ($this->searchQuery) {
            $services->where(function ($query) {
                return $query->where('title', 'LIKE', "%$this->searchQuery%")
                    ->orWhere('description', 'LIKE', "%$this->searchQuery%");
            });
        }

        if ($this->selectedType) {
            $services->where('type', $this->selectedType);
        }

        $this->services = $services->get();
    }

    public function setSelectedType($type)
    {
        $this->selectedType = $type;

        $this->setServices();
    }
}
