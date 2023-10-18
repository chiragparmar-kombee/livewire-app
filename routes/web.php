<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\SearchPosts;
use App\Livewire\ShowPosts;
use App\Livewire\TodoList;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);
Route::get('/todo', TodoList::class);

Route::get('/post/add', CreatePost::class);
Route::get('/posts', ShowPosts::class);
Route::get('/search-posts', SearchPosts::class);
