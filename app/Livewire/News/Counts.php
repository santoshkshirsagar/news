<?php

namespace App\Livewire\News;

use Livewire\Component;

use App\Models\News;

class Counts extends Component
{
    public $total;

    public function mount()
    {
        $this->total = News::count();
    }
    public function render()
    {
        return view('livewire.news.counts');
    }
}
