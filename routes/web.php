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


/*
Route::get('/', function () {
    return view('welcome');
	
});
Route::get('/hello', function () {
    //return view('welcome');
	return 'hello world';
});
Route::get('/users/{id}', function ($id) {
    return 'this is user: '.$id ; 
	
});
Route::get('/about', function () {
    return view('pages.about');
	
});
*/
Route::get('/about', 'PageController@about' );
Route::get('/', 'PageController@index' );
Route::get('/services', 'PageController@services' );
Route::get('/info', 'SPageController@info' );
route::resource('posts','PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
