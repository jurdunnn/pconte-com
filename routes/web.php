<?php

use App\Http\Livewire\ContactForm;
use App\Http\Livewire\Services;
use App\Http\Livewire\TestimonialsIndex;
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

Route::get('/', '\App\Http\Controllers\IndexController@create')->name('index');

Route::get('/services', Services::class)->name('services');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', ContactForm::class)->name('contact');
