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

Route::get('/', [
    'uses' => 'App\Http\Controllers\BlogController@index',
    'as' => 'blog'
]);
Route::get('/blog/{post}', [
    'uses' => 'App\Http\Controllers\BlogController@show',
    'as' => 'blog.show'

]);