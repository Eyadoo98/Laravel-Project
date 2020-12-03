<?php


use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth'],function(){

    //Route for post
    Route::get("/post/create","postController@create");
    Route::post("/post/store","postController@store");
   
    
    //Route for category
    
    Route::get("/categories","categoryController@index");//To show all category
    Route::get("/category/create","categoryController@create");//To create Category   
    Route::post("/category/store","categoryController@store");//To store Category
    Route::get("/category/Edit/{id}","categoryController@edit");//To Edit Category
    Route::get("/category/Delete/{id}","categoryController@destroy");//To Delete Category
    Route::post("/category/Update/{id}","categoryController@update");//To store Category
    
});