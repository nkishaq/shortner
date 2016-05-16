<?php

/* Route::get('/', function () {
	
    return view('welcome');
}); */

/*
|
| User front side url gouped with namespace Front
|
| AngularJs requests set prifix that /api/v1/front
*/


Route::group(['namespace'=>'Front'],function()
{
	Route::get('/', [
		'uses'=>'ShortnerController@getHome',
		'as'=>'front.Shortner.getHome'
	]);
	
	Route::get('{short}', [
		'uses'=>'ShortnerController@getShortUrl',
		'as'=>'front.Shortner.getShortUrl'
	]);

});


Route::group(['prefix' => '/api/v1/front','namespace'=>'Front'], function()
{
	Route::post('longurl', 'ShortnerController@postLongUrl');
	
});
