<?php

namespace App\Livewire\News;

use Livewire\Component;
use App\Models\News;

class Show extends Component
{
    public $news;
    public function mount(News $news)
    {
        $this->news = $news;
    }
    public function render()
    {
        return view('livewire.news.show');
    }
}
