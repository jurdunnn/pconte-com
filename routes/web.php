<?php

use App\Http\Livewire\ContactForm;
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

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/testimonials', TestimonialsIndex::class)->name('testimonials');

Route::get('/contact', ContactForm::class)->name('contact');
