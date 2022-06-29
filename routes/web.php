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
    return 'main web-site page';
});

Route::get('/user/{id}', function ($id) {
    return 'User id is ' . $id;
})->whereNumber('id');

Route::get('/city/{name}', function ($name) {
    return 'City name is ' . $name;
})->whereAlpha('name');

Route::get('/user/all', function () {
		return 'all';
	});

Route::get('/user/all/desc', function () {
		return 'all desc';
	});

Route::get('/user/{name}/{id?}', function ($name, $id) {
		return 'name id';
	});