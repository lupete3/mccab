<?php

namespace App\Livewire\Admin\PracticeAreas;

use App\Models\PracticeArea;
use Livewire\Component;

class Create extends Component
{
    public $icon;
    public $title;
    public $description;
    public $link;

    protected $rules = [
        'icon' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'link' => 'nullable|string|max:255',
    ];

    public function save()
    {
        $this->validate();

        PracticeArea::create([
            'icon' => $this->icon,
            'title' => $this->title,
            'description' => $this->description,
            'link' => $this->link,
        ]);

        session()->flash('message', 'Practice Area Created Successfully.');

        return redirect()->route('admin.practice-areas.index');
    }

    public function render()
    {
        return view('livewire.admin.practice-areas.create');
    }
}
