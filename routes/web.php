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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/{any}', function(){
    return view('welcome');
})->where('any', '.*');


Route::get('/hello', function(){
    echo "<br>hey this is just a test page";
})->middleware('auth');
Route::get('/login', function(){
    echo "this is the login page";
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
