<?php

use App\Panino;
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
//     $panini= Panino::all();
//     dd($panini);
//     return view('welcome');
// });


Route::get('/', 'HomeController@index')->name('home');

Route::get('/libbro/{id}', 'HomeController@show')->name('libbro');