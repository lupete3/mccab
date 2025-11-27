<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Statistic;

class Stats extends Component
{
    public $statistics;

    public function mount()
    {
        $this->statistics = Statistic::all();
    }

    public function render()
    {
        return view('livewire.stats', [
            'statistics' => $this->statistics,
        ]);
    }
}
