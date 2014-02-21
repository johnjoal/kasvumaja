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

$languages = array('ru','et');
$locale = Request::segment(1);
if(in_array($locale, $languages))
	App::setLocale($locale);
else
	$locale = App::getLocale();

Route::get('/{lang?}', array('uses' => 'PageController@getIndex'));
Route::group(array('prefix' => $locale), function()
{
	Route::controller('page', 'PageController');
});

Route::controller('page', 'PageController');