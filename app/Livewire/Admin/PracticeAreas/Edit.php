<?php

namespace App\Livewire\Admin\PracticeAreas;

use App\Models\PracticeArea;
use Livewire\Component;

class Edit extends Component
{
    public PracticeArea $practiceArea;
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

    public function mount(PracticeArea $practiceArea)
    {
        $this->practiceArea = $practiceArea;
        $this->icon = $practiceArea->icon;
        $this->title = $practiceArea->title;
        $this->description = $practiceArea->description;
        $this->link = $practiceArea->link;
    }

    public function update()
    {
        $this->validate();

        $this->practiceArea->update([
            'icon' => $this->icon,
            'title' => $this->title,
            'description' => $this->description,
            'link' => $this->link,
        ]);

        session()->flash('message', 'Practice Area Updated Successfully.');

        return redirect()->route('admin.practice-areas.index');
    }

    public function render()
    {
        return view('livewire.admin.practice-areas.edit');
    }
}
