<?php

namespace App\Livewire\News;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\News;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.news.index', [
            'news' => News::paginate(9),
        ]);
    }
}
