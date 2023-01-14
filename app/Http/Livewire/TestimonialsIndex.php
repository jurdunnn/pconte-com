<?php

namespace App\Http\Livewire;

use App\Models\Testimonial;
use Illuminate\Support\Collection;
use Livewire\Component;

class TestimonialsIndex extends Component
{
    public Collection $testimonials;

    public function mount()
    {
        $this->testimonials = Testimonial::where('hidden', false)
            ->inRandomOrder()
            ->limit(3)
            ->get();
    }

    public function render()
    {
        return view('livewire.testimonials-index');
    }
}
