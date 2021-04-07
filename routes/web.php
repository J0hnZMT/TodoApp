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
    'uses' => 'TodoControllers@index',
    'as' => 'todos'
]);

Route::get('/todos/delete/{id}', [
    'uses' => 'TodoControllers@destroy',
    'as' => 'todo.delete'
]);

Route::get('/todos/update/{id}', [
    'uses' => 'TodoControllers@update',
    'as' => 'todo.update'
]);

Route::post('/create/todo', [
    'uses' => 'TodoControllers@store'
]);

Route::post('/todos/save/{id}', [
    'uses' => 'TodoControllers@save',
    'as' => 'todo.save'
]);

Route::get('/todos/completed/{id}', [
    'uses' => 'TodoControllers@completed',
    'as' => 'todo.completed'
]);
