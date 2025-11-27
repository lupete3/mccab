<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\Lawyer;
use App\Models\Adress;

class LandingPage extends Component
{
    public function render()
    {
        return view('livewire.landing-page', [
            'services' => Service::all(),
            'lawyers' => Lawyer::all(),
            'addresses' => Adress::all(),
        ]);
    }
}


