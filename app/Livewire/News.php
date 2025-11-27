<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class News extends Component
{
    public $featuredNews;
    public $newsArticles;

    public function mount()
    {
        $this->featuredNews = Post::with('user')->where('category', 'À la Une')->latest('published_at')->first();
        $this->newsArticles = Post::with('user')->where('category', '!=', 'À la Une')->latest('published_at')->get();
    }

    public function render()
    {
        return view('livewire.news', [
            'featuredNews' => $this->featuredNews,
            'newsArticles' => $this->newsArticles,
        ]);
    }
}
