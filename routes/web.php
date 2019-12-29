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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'front\HomeController@index')->name('home');
Route::get('/aboutus', 'front\HomeController@aboutus')->name('about');
Route::get('/contact', 'front\HomeController@contact')->name('contact');
Route::get('/university', 'front\HomeController@university')->name('university');
Route::get('/universitydet', 'front\HomeController@universitydetail')->name('universitydetail');
Route::get('/scholarship', 'front\HomeController@scholarship')->name('scholarship');
Route::get('/scholarshipdet', 'front\HomeController@scholarshipdetail')->name('scholarshipdetail');






Route::get('/admin', 'admin\aHomeController@index' ) ;
Route::get('/admin/category', 'admin\CategoryController@index' ) ;