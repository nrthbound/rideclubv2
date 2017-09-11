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

Route::get('/home', 'HomeController@index');

// User Profile Routes
Route::post('/profile/{profile}/update', 'ProfileController@update')->name('update-profile');

// Temporary Profile View Route
Route::get('/profile', 'ProfileController@index');

// Routes related to Activities
Route::get('/activity', 'ActivityController@view')->name('activity');

// Routes related to Builds


//Snaps
Route::get('/snap/new', 'SnapController@create');
