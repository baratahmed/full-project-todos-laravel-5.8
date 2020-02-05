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


Route::get('/todos', [
	'uses' => 'TodosController@index',
	'as' => 'todos',
]);

Route::post('/create/todo', [
	'uses' => 'TodosController@store',
	'as' => 'create.todo',
]);

Route::get('/delete/todo/{id}', [
	'uses' => 'TodosController@delete',
	'as' => 'delete.todo',
]);

Route::get('/update/todo/{id}', [
	'uses' => 'TodosController@update',
	'as' => 'update.todo',
]);

Route::post('/save/todo/{id}', [
	'uses' => 'TodosController@save',
	'as' => 'save.todo',
]);
Route::get('/todos/completed/{id}', [
	'uses' => 'TodosController@completed',
	'as' => 'todos.completed',
]);