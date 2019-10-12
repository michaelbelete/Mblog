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

Route::get('/','pagesController@index');
Route::get('/about','pagesController@about');
Route::get('/services','pagesController@services');
Route::resource('posts', 'PostsController');
Route::resource('comments','CommentController');
// Route::get('/hello', function(){
//     return "<h1> hello world </h1>";
// });
// Route::get('/users/{id}/{name}', function($id,$name){
//     return 'this is user with name '.$name. "and with id of " . $id;
// });
// Route::get('/users', function(){
//     return "My user";
// });

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('home');
