<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('projects', 'ProjectController@getProjects')->name('all-project');
Route::post('create', 'ProjectController@create')->name('create-project');
Route::put('project/{id}', 'ProjectController@update')->name('update-project');
Route::delete('project/{id}', 'ProjectController@delete')->name('delete-project');
