<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $category;
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }
    public function add()
    {
        $data = $this->validate([
            'category'=>"required"
        ]);
        $category = Category::create([
            "name"=>$this->category
        ]);
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('livewire.categories');
    }
}
