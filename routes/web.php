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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('setlocale/{locale}', function ($locale) {
  if (in_array($locale, \Config::get('app.locales'))) {
    Session::put('locale', $locale);
  }
  return redirect()->back();
});

Route::get('price','ProductController@byPrice');

Route::get('add','ProductController@create');
Route::post('add','ProductController@add');

Route::get('edit/{id}',array('as'=>'edit','uses'=>'ProductController@edit'));
Route::patch('edit/{id}',array('as'=>'edit','uses'=>'ProductController@update'));

Route::delete('delete/{product}','ProductController@delete');

Route::get('show/{id}','ProductController@show'); 

Route::get('search',array('as'=>'search','uses'=>'SearchController@search'));
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'SearchController@autocomplete'));
