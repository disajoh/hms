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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UsersController@index');
Route::get('/users/{user}', 'UsersController@show');
Route::get('/users/edit', 'UsersController@edit');

Route::get('/bookings', 'BookingsController@index')->name('bookings');

Route::get('/bookings/edit', 'BookingsController@edit');
Route::get('/bookings/newreservation', 'BookingsController@create')->name('newreservation');
Route::get('/bookings/existingreservation', 'BookingsController@create')->name('existingreservation');

//new reservation uses two tables. First update customers table then use eloquent to update bookings
Route::post('/bookings/new', 'CustomersController@store')->name('savenewreservation');

Route::post('/bookings/existing', 'BookingsController@store')->name('savereservation');

Route::get('/bookings/{booking}', 'BookingsController@show');