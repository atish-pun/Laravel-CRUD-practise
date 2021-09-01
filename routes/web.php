<?php

use Illuminate\Support\Facades\Route;
// use \App\Http\Controllers\PractiseController;   laravel 8 


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

Route::get('/',"App\Http\Controllers\PractiseController@home")->name('home');
Route::get('/create',"App\Http\Controllers\PractiseController@create")->name('create');
Route::post('/create',"App\Http\Controllers\PractiseController@store")->name('store');
Route::get('/edit/{id}',"App\Http\Controllers\PractiseController@edit")->name('edit');
Route::post('/update/{id}',"App\Http\Controllers\PractiseController@update")->name('update');
Route::delete('/delete/{id}',"App\Http\Controllers\PractiseController@delete")->name('delete');




// Route::get('/', [PractiseController]::class, 'index'); laravel 8


Route::get('/home', function () {
    return view('welcome');
});

