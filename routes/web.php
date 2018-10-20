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

//List Articles
Route::get('articles','ArticleController@index');

//Single List Article
Route::get('article/{id}','ArticleController@show');

//Create List Article
Route::post('article','ArticleController@store');

//Update list Article
Route::put('article','ArticleController@store');

//Destroy Article
Route::delete('article/{id}','ArticleController@destroy')->name('deleteArticle');


