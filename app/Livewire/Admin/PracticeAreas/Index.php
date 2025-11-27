<?php

namespace App\Livewire\Admin\PracticeAreas;

use App\Models\PracticeArea;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function delete(PracticeArea $practiceArea)
    {
        $practiceArea->delete();
        session()->flash('message', 'Practice Area Deleted Successfully.');
    }

    public function render()
    {
        return view('livewire.admin.practice-areas.index', [
            'practiceAreas' => PracticeArea::paginate(10)
        ]);
    }
}
