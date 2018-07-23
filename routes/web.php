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
    return view('pages.welcome');
});

//crud
Route::resource('cruds','CrudController');

//Send Mail from contact form 
Route::get('/contact', 'PageController@getcontact')->name('contact');
Route::post('/contact','PageController@store');

//Search 
Route::get('/search','SearchController@view')->name('search');
Route::post('/search','SearchController@search');

//Upload 
Route::get('/upload', 'UploadController@view')->name ('upload');
Route::post('/upload','UploadController@upload');



