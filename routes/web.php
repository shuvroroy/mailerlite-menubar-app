<?php

use App\Livewire\Pages\Authenticate;
use App\Livewire\Pages\Dashboard;
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

Route::get('/', Authenticate::class)->name('authenticate');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
