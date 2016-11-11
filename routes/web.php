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
Route::get('articles','ArticlesController@index');
Route::get('articles.create','ArticlesController@create');
Route::post('articles.create',['as'=>'create','articles'=>'ArticlesController@create']);
Route::post('articles.update',['as'=>'update','articles'=>'ArticlesController@update']);
Route::post('articles.destroy',['as'=>'destroy','articles'=>'ArticlesController@destroy']);
Route::post('articles.show',['as'=>'show','articles'=>'ArticlesController@show']);
Route::post('articles.store',['as'=>'CreateArticle','articles'=>'ArticlesController@store']);
Route::group(['prefix' => 'article', 'middleware' => 'article'], function()
{
    Route::get('dashboard', 'article\AdminController@index');

    // [...] other routes

    // Dick CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('tag', 'Admin\TagCrudController');
});