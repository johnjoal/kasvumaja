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
//Route::get('/admin/edit-product', array('uses' => 'AdminController@edit-product'));
/*Route::get('/admin', array('before' => 'auth', function()
{
    return View::make('layouts.admin')->nest('content', 'admin.index');
}));*/
/*Route::post('admin/edit-product', array('before' => 'csrf', function()
{
    //Auth::attempt( array('email' => Auth::user()->email, 'password' => Auth::user()->password) );
    return 'You gave a valid CSRF token!';
}));*/

Route::get('/login', function()
{
    return View::make('layouts.admin')->nest('content', 'login');
});
Route::post('/login', function()
{
    Auth::attempt( array('email' => Input::get('email'), 'password' => Input::get('password')) );

    return Redirect::to('/admin');
});
Route::get('/logout', function()
{
    Auth::logout();
    return Redirect::to('/');
});

/*** admin ***/
//Route::get('admin/create-product/{product}', array('uses' => 'AdminController@getCreateProduct', 'as' => 'admin.create-product'));
/*** end admin ***/