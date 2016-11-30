<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'IndexController@index');

Route::get('/case', 'IndexController@anli');

Route::get('/fuwu', 'IndexController@fuwu');

Route::get('/zixun', 'IndexController@zixun');

Route::get('/about', 'IndexController@about');

Route::get('/contact', 'IndexController@contact');

Route::get('/preview/{base_id}', 'ModuleController@preview');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/list', 'HomeController@getList');
Route::get('/add', 'HomeController@add');
Route::get('/config', 'HomeController@config');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/module/index', 'ModuleController@index');
});

