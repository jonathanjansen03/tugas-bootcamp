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

Route::get('/', 'HomeController@index');
Route::get('/CreateArticle', 'ArticleController@showForm')->name('articleForm');
Route::get('/ShowArticles', 'ArticleController@index')->name('showArticles');
Route::get('/editArticle/{id}', 'ArticleController@edit')->name   ('editArticle');
Route::get('deleteArticle/{id}', 'ArticleController@delete')->name('deleteArticle');
Route::get('{id}', 'ArticleController@showDetails')->name('showDetails');
Route::post('/CreateArticle', 'ArticleController@store')->name('storeArticle');
Route::patch('editArticle/{id}', 'ArticleController@update')->name('updateArticle');