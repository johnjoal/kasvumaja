<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Admin Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    protected $layout = 'layouts.admin';

	public function getIndex()
	{
		return View::make('admin/index');
	}
	
	public function getFirstPage()
	{
		return View::make('admin/first-page');
	}
	
	public function getCreateProduct()
	{
	    $product = new Product;
	    $this->layout->content = View::make('admin.create-product')->with('product', $product);;
	}
	public function postCreateProduct()
	{
	    $this->layout->content = View::make('admin.create-product');
	}
}