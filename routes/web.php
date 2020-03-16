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


Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function (){
    Route::get('/credentials', 'HomeController@credentials')->name('credentials');

    //ADMIN
    Route::middleware('isAdmin')->group(function (){
        Route::get('/admin/create', 'HomeController@adminCreate')->name('admin.create');
        Route::post('/admin/create/confirm', 'HomeController@adminInsert')->name('admin.create.post');
    });
});
