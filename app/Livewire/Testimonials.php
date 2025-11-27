<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial;

class Testimonials extends Component
{
    public $testimonials;

    public function mount()
    {
        $this->testimonials = Testimonial::all();
    }

    public function render()
    {
        return view('livewire.testimonials', [
            'testimonials' => $this->testimonials,
        ]);
    }
}
