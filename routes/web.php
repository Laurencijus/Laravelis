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

Route::get('/', function () {
    return view('welcome');
});
//kelias
Route::group(['prefix' => 'book'], function () {
    Route::get('', 'BookController@index')->name('book.index');
    Route::get('create', 'BookController@create')->name('book.create');
    Route::get('show/{book}', 'BookController@show')->name('book.show');
    Route::post('store', 'BookController@store')->name('book.store');
    Route::get('edit/{book}', 'BookController@edit')->name('book.edit');
    Route::post('update/{book}', 'BookController@update')->name('book.update');
    Route::post('destroy/{book}', 'BookController@destroy')->name('book.destroy');
});
//kelias
Route::group(['prefix' => 'author'], function () {
    Route::get('', 'AuthorController@index')->name('author.index');
    Route::get('create', 'AuthorController@create')->name('author.create');
    Route::get('show/{author}', 'AuthorController@show')->name('author.show');
    Route::post('store', 'AuthorController@store')->name('author.store');
    Route::get('edit/{author}', 'AuthorController@edit')->name('author.edit');
    Route::post('update/{author}', 'AuthorController@update')->name('author.update');
    Route::post('destroy/{author}', 'AuthorController@destroy')->name('author.destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'users'], function () {
    Route::get('', 'AuthorController@index')->name('users.index');
    Route::get('create', 'AuthorController@create')->name('users.create');
    Route::get('show/{users}', 'AuthorController@show')->name('users.show');
    Route::post('store', 'AuthorController@store')->name('users.store');
    Route::get('edit/{users}', 'AuthorController@edit')->name('users.edit');
    Route::post('update/{users}', 'AuthorController@update')->name('users.update');
    Route::post('destroy/{users}', 'AuthorController@destroy')->name('users.destroy');
});
