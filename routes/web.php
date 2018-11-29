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
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    Route::resource('offers', 'Admin\OfferController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
