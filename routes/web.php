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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('dispensaries', "DispensaryController");
Route::resource('vessels', "UserVesselController");

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'WelcomeController@index');
Route::get('imgstore/{filename}', function ($filename)
{
    return Image::make(storage_path() . "/" . $filename)->response();
});

Route::resource('articles', 'ArticleController');
