<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PracticeArea;

class PracticeAreas extends Component
{
    public $practiceAreas;

    public function mount()
    {
        $this->practiceAreas = PracticeArea::all();
    }

    public function render()
    {
        return view('livewire.practice-areas', [
            'practiceAreas' => $this->practiceAreas,
        ]);
    }
}
