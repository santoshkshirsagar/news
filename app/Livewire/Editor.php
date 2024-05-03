<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Category;
use App\Models\News;
use Auth;

class Editor extends Component
{
    use WithPagination;

    public $showForm = false;
    public $categories;
    public $title;
    public $content;
    public $category;
    public $editingNews;

    public function mount(){
        $this->categories = Category::all();
    }

    public function add()
    {
        $this->showForm = true;
    }

    public function save()
    {
        $data = $this->validate([
            "title"=>"required",
            "content"=>"required",
            "category"=>"required"
        ]);
        if($this->editingNews){
            $this->editingNews->update([
                "title"=>$this->title,
                "content" => $this->content,
                "category_id" => $this->category
            ]);
        }else{
            $news = News::create([
                "title"=>$this->title,
                "content" => $this->content,
                "category_id" => $this->category,
                "user_id" => Auth::user()->id
            ]);
        }
        $this->reset(['title','content','category','showForm','editingNews']);
    }


    public function edit(News $news)
    {
        $this->editingNews = $news;
        $this->title = $news->title;
        $this->content = $news->content;
        $this->category = $news->category_id;
        $this->showForm = true;
    }

    public function delete(News $news)
    {
        $news->delete();
    }

    public function render()
    {
        return view('livewire.editor', [
            'news' => News::paginate(10),
        ]);
    }
}
