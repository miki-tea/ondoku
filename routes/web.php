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

// Auth::routes();

Route::get('/groups/{id}', 'GroupController@index')->name('groups.index');
Route::get('/groups/show/{id}', 'GroupController@show')->name('group.show');
Route::get('/groups/agenda/{id}', 'AgendaController@index')->name('agenda.index');
