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

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'api/v1'], function () {
	Route::get('events', 'EventController@index');
	Route::get('live_events', 'EventController@live');
	Route::get('events/{id}', 'EventController@show'); //show stand's event
	Route::get('stands/{id}', 'StandController@show');
	Route::post('stands/{stand_id}/company', 'CompanyController@store'); //booking a stand
	Route::post('stands/{stand_id}/visitors', 'VisitorController@store'); //register a visite in a stand
});