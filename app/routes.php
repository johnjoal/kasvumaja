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
	return View::make('hello');
});

Route::resource('products', 'ProductController');
//Route::controller('products', 'ProductController');

Route::controller('admin', 'AdminController');
Route::get('/admin', array('before' => 'auth' ,function()
{
    return View::make('admin/index');
}));

Route::get('/login', function()
{
    return View::make('login');
});
Route::post('/login', function()
{
    // Validation? Not in my quickstart!
    // No, but really, I'm a bad person for leaving that out
    Auth::attempt( array('email' => Input::get('email'), 'password' => Input::get('password')) );

    return Redirect::to('/');
});
Route::get('/logout', function()
{
    Auth::logout();
    return Redirect::to('/');
});

/*** admin ***/
Route::get('admin/create-product/{product}', array('uses' => 'AdminController@getCreateProduct', 'as' => 'admin.create-product'));
/*** end admin ***/