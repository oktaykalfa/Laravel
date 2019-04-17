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

use Illuminate\Support\Facades\Route;

Auth::routes();


Route::group(["middleware" => ["auth"]], function () {

    Route::get('/', 'homeController@getPosts');
    Route::post('/query', 'homeController@formQuery');

    Route::match(array('GET', 'POST'), '/create', 'postController@createView');
    Route::match(array('GET', 'POST'), '/update', 'postController@updatePost');
    Route::post('/create', 'postController@createPost');
    Route::post('/', 'postController@deletePost');

});


Route::get('/logout', function () {
    Session::flush();
    Auth::logout();
    return Redirect::to("/login");
});




