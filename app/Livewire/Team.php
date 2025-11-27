<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TeamMember;

class Team extends Component
{
    public $teamMembers;

    public function mount()
    {
        $this->teamMembers = TeamMember::all();
    }

    public function render()
    {
        return view('livewire.team', [
            'teamMembers' => $this->teamMembers,
        ]);
    }
}
