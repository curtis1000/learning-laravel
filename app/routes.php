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

// bind repositories
App::bind('LanguageRepositoryInterface', 'ConstLanguageRepository');
App::bind('AccountRepositoryInterface',  'EloquentAccountRepository');
App::bind('DealerRepositoryInterface',   'EloquentDealerRepository');

Route::get('/', function()
{
	return 'hello';
});

Route::get('dealers', array(
        'as'    => 'dealers-index',
        'uses'  => 'DealersController@index'
    )
);

Route::post('dealer/register', array(
        'as'    => 'post-dealer-register',
        'uses'  => 'DealerRegisterController@postForm'
    )
);