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

Route::get( '/', 'CSCController@index' )->name( 'index' );
Route::post( '/', 'FormController@form' )->name( 'index' );

Route::get( 'about-us', 'CSCController@about_us' )->name( 'about_us' );
Route::post( 'about-us', 'FormController@form' )->name( 'about_us' );

Route::get( 'contact', 'CSCController@contact' )->name( 'contact' );
Route::post( 'contact', 'FormController@form' )->name( 'contact' );

Route::get( 'why-choose-us', 'CSCController@why_choose_us' )->name( 'why_choose_us' );
Route::post( 'why-choose-us', 'FormController@form' )->name( 'why_choose_us' );

Route::get( 'what-is-a-registered-agent', 'CSCController@what_is_a_registered_agent' )->name( 'what_is_a_registered_agent' );
Route::post( 'what-is-a-registered-agent', 'FormController@form' )->name( 'what_is_a_registered_agent' );

Route::get( 'why-use-a-registered-agent', 'CSCController@why_use_a_registered_agent' )->name( 'why_use_a_registered_agent' );
Route::post( 'why-use-a-registered-agent', 'FormController@form' )->name( 'why_use_a_registered_agent' );

Route::get( 'wholesale-services', 'CSCController@wholesale_services' )->name( 'wholesale_services' );
Route::post( 'wholesale-services', 'FormController@form' )->name( 'wholesale_services' );
