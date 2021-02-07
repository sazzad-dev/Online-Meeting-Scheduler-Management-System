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

//Route::get('/', function () {
//    return view('welcome');
//});
//Foernt-end site
Route::get('/','MarcateManagementController@index');








//Back-end site
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','SuperAdminController@logout');

//category releted
Route::get('/add-category','CategoryController@index');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save-category','CategoryController@save_category');


//add user
Route::get('/add-user','UserController@index');
Route::get('/all-user','UserController@all_user');
Route::post('/save-user','UserController@save_user');
Route::get('/delete-user/{user_id}','UserController@delete_user');


Route::get('/add-event','EventController@index');
Route::get('/all-event','EventController@all_event');
Route::post('/save-event','EventController@save_event');
Route::get('/delete-event/{event_id}','EventController@delete_event');