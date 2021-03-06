<?php
use Intervention\Image\Image;
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


Route::resource('dispensaries', "DispensaryController");

Route::resource('vessels', "UserVesselController");
Route::get('vessels/{id}/image', "UserVesselController@image");

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'WelcomeController@index')->name('welcome');

Route::resource('articles', 'ArticleController');
