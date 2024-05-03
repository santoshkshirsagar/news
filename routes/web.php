<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Editor;
use App\Livewire\Categories;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/news/{news}', function ($news) {
    return view('news',compact('news'));
})->name('news.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/editor', Editor::class)->name('editor');
    Route::get('/categories', Categories::class)->name('categories');
});
