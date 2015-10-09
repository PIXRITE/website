<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get( '/', [
    'as' => 'index_page',
    'uses' => 'PagesController@index'
]);

Route::get( '/work', [
    'as' => 'work_page',
    'uses' => 'PagesController@work'
]);

Route::get( '/services', [
    'as' => 'services_page',
    'uses' => 'PagesController@services'
]);

Route::get( '/about', [
    'as' => 'about_page',
    'uses' => 'PagesController@about'
]);

Route::get( '/contact', [
    'as' => 'contact_page',
    'uses' => 'PagesController@contact'
]);

Route::get( '/hire', [
    'as' => 'hire_page',
    'uses' => 'PagesController@hire'
]);