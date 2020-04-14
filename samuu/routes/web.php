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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/employees','EmployeesController');

Route::resource('/managers','ManagersController');

Route::resource('/workers','WorkersController');


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/admin','UsersController',['except'=>['show','create','store']]);
});