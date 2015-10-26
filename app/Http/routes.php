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

Route::get( '/brand-design-services', [
    'as' => 'brand-page',
    'uses' => 'PagesController@brand'
]);

Route::get( '/online-marketing-services', [
    'as' => 'seo-page',
    'uses' => 'PagesController@seo'
]);

Route::get( '/web-design-services', [
    'as' => 'web-page',
    'uses' => 'PagesController@web'
]);

Route::get( '/interface-design-services', [
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

Route::get( '/request-quote', [
    'as' => 'hire-page',
    'uses' => 'PagesController@hire'
]);

Route::post( '/request-quote', [
    'as' => 'hire-form',
    'uses' => 'EmailController@send_hire'
]);

Route::post( '/contact', [
    'as' => 'contact-form',
    'uses' => 'EmailController@send_contact'
]);