<?php

class ProductController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Product Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	protected $layout = 'layouts.master';

	public function index()
	{
		return View::make('products/index');
	}
    
    public function create()
	{
	    $this->layout->content = View::make('products.create');
		//return View::make('products/create');
	}
}