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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/admin', 'AdminController@dashboard');

Route::get('/userprofile', 'AdminController@userprofile');

Route::get('/users', 'AdminController@users');

Route::get('/category', 'AdminController@addcategory');

Route::get('/allcategories', 'AdminController@allcategories');

Route::get('/trash', 'AdminController@trash' );

Route::POST('/savecate','CategoryController@savecate');
Route::POST('/saveprofile', 'ProfileController@saveprofile');
Route::get('/editcat/{id}', 'CategoryController@editcat');
Route::post('/editcat/update', 'CategoryController@update');
Route::get('/editprofile/{id}','ProfileController@editpro');
Route::post('/editprofile/update/{id}', 'ProfileController@update');
Route::get('/delete/{id}', 'ProfileController@delete');
Route::get('/restore/{id}', 'ProfileController@restore');
Route::get('/remove/{id}', 'ProfileController@remove');
Route::post('/displayprofileforuser/{id}', 'ProfileController@displayprofileforuser');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
