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
    return view('home');
});

Route::prefix('admin')->group(function () {
    Route::get('/', 'EmployeeController@index')->name('admin.index');
    Route::get('/create', 'EmployeeController@create')->name('admin.create');
    Route::post('/create', 'EmployeeController@store')->name('admin.store');
    Route::get('/{id}/edit', 'EmployeeController@edit')->name('admin.edit');
    Route::post('/{id}/edit', 'EmployeeController@update')->name('admin.update');
    Route::get('/search', 'EmployeeController@search')->name('admin.search');
    Route::get('/{id}/delete', 'EmployeeController@delete')->name('admin.delete');
});
