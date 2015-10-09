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
    'as' => 'index-page',
    'uses' => 'PagesController@index'
]);

Route::get( '/work', [
    'as' => 'work-page',
    'uses' => 'PagesController@work'
]);

Route::get( '/services', [
    'as' => 'services-page',
    'uses' => 'PagesController@services'
]);

Route::get( '/services/brand', [
    'as' => 'brand-page',
    'uses' => 'PagesController@brand'
]);

Route::get( '/services/digital-marketing', [
    'as' => 'marketing-page',
    'uses' => 'PagesController@marketing'
]);

Route::get( '/services/web', [
    'as' => 'web-page',
    'uses' => 'PagesController@web'
]);

Route::get( '/services/ui-ux', [
    'as' => 'ux-page',
    'uses' => 'PagesController@ux'
]);

Route::get( '/about', [
    'as' => 'about-page',
    'uses' => 'PagesController@about'
]);

Route::get( '/contact', [
    'as' => 'contact-page',
    'uses' => 'PagesController@contact'
]);

Route::get( '/hire', [
    'as' => 'hire-page',
    'uses' => 'PagesController@hire'
]);