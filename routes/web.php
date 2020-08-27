<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Used to display booking input page
Route::get('booking', function()
{
    return view('booking');
});

// Used to display booking update page
Route::get('update', function()
{
    return view('update');
});

// Used to display index page
Route::get('index', function()
{
    return view('index');
});

// Booking routes
Route::resource('bookings', 'BookingController');

