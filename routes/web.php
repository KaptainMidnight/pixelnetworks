<?php

use App\Http\Livewire\Headline;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/news', function () {
    return view('news');
})->name('news');

Route::middleware(['auth:sanctum', 'verified'])->get('/news/{id}', Headline::class)->name('headline');
Route::middleware(['auth:sanctum', 'verified'])->get('/comment/{id}/create', \App\Http\Livewire\Comment::class)->name('comment.create');
Route::middleware(['auth:sanctum', 'verified'])->get('/friends', \App\Http\Livewire\Friends::class)->name('friends');
//Route::middleware(['auth:sanctum', 'verified'])->get('/messenger', \App\Http\Livewire\Messages::class)->name('messages');
