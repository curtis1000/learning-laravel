<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return 'check if user is logged in and redirect conditionally to ??? or /login';
});

Route::get('login', 'LoginController@showLogin');

Route::get('dealer/register', array(
        'as'    => 'get-dealer-register',
        'uses'  => 'DealerRegisterController@getForm'
    )
);

Route::post('dealer/register', array(
        'as'    => 'post-dealer-register',
        'uses'  => 'DealerRegisterController@postForm'
    )
);