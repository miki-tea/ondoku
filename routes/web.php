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
//     return view('index');
// });

// Auth::routes();


//グループを新規作成ページを表示
Route::get('/groups/new', 'GroupController@new')->name('group.new');
//グループを新規作成
Route::post('/groups/new', 'GroupController@store');
//グループ一覧を表示する
Route::get('/groups', 'GroupController@index')->name('groups.index');
//グループ検索結果を表示する
Route::get('/groups/search', 'GroupController@search')->name('groups.search');

// グループ個別ページから議題新規作成
Route::post('/groups/{id}/show', 'AgendaController@store');
// グループ個別ページ表示
Route::get('/groups/{id}/show', 'GroupController@show')->name('group.show');

// 議題個別ページ表示
Route::get('/groups/agenda/{id}/show', 'AgendaController@index')->name('agenda.index');
Route::post('/groups/agenda/{id}/show', 'CommentsController@store');
