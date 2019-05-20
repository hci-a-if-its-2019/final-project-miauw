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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/resource_group', 'HomeController@ResourceGroup')->name('resource_group');
Route::get('/virtual_machine', 'HomeController@VirtualMachine')->name('virtual_machine');
Route::get('/create', 'HomeController@Create')->name('create');
Route::get('/create_progress', 'HomeController@CreateProgress')->name('create_progress');