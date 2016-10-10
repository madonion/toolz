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

Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index');



Route::get('/', 'HomeController@index');
Route::get('/despre', function(){return view('pages/about');});
Route::get('/cum-comand', function(){return view('pages/cum-comand');});
Route::get('/contact', function(){return view('pages/contact');});
Route::get('/comanda-rapida', function(){return view('pages/comanda-rapida');});
Route::get('/oferte-speciale', function(){return view('pages/oferte-speciale');});



Route::get('{cslug}','CategoriesController@index')->where(['cslug'=>'^(.*)-c-([0-9_]+).html$']);

Route::get('{slug}','ProductsController@index')->where(['slug'=>'^(.*)-p-([0-9_]+).html$']);







    Route::get('contul-meu',['as'=>'myAccount','uses'=>'AccountController@myAccount']);

