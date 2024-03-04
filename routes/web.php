<?php

use App\Livewire\Counter;
use App\Livewire\SearchUsers;
use App\Livewire\Todo;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Todo::class)->name('todo');

Route::get('/livewire/counter', Counter::class)->name('counter');

Route::get('/livewire/search', SearchUsers::class)->name('search-filter');
