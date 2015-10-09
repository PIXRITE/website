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

Route::get( '/services/brand', [
    'as' => 'brand_page',
    'uses' => 'PagesController@brand'
]);

Route::get( '/services/digital-marketing', [
    'as' => 'marketing_page',
    'uses' => 'PagesController@marketing'
]);

Route::get( '/services/web', [
    'as' => 'web_page',
    'uses' => 'PagesController@web'
]);

Route::get( '/services/ui-ux', [
    'as' => 'ui_page',
    'uses' => 'PagesController@ui'
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