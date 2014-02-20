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

/*** ADMIN MODE ***/
Route::get('/login', function()
{
    if (Auth::check())
        return Redirect::intended('admin');
    return View::make('login');
});
Route::post('/login', function()
{
    if (Auth::attempt( array('email' => Input::get('email'), 'password' => Input::get('password')) ))
        return Redirect::intended('admin');
    return Redirect::to('/login')->withError('Неверный логин или пароль!');
});
Route::get('/logout', function()
{
    Auth::logout();
    return Redirect::to('/');
});
Route::controller('admin', 'AdminController');
/*** END ADMIN MODE ***/

Route::get('/{lang?}', function($lang = null)
{
    if (!isset($lang))
        $lang = App::getLocale();
    App::setLocale($lang);
	//return View::make('hello')->with('lang', $lang);
});

Route::controller('pages', 'PageController');