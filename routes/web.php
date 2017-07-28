<?php

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
// Routes for various POST requests
Route::post('/', 'NewsletterController@signup')->name('newsletter');

// Routes that just return views
Route::get('/', function() {
    return view('pages.home');
})->name('home');
Route::get('/events', function() {
    return view('pages.events');
})->name('events');
Route::get('/gallery', function() {
    return view('pages.gallery');
})->name('gallery');
