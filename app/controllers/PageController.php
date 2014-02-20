<?php

class PageController extends BaseController {

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

	public function getIndex()
	{
		return View::make('pages.index');
	}
    
    public function getProducts()
	{
	    $data = array(
	        'products' => Page::where('type', PageType::GREENHOUSE)
	            ->where('lang', App::getLocale())
	            ->get()
	        );
		$this->layout->content = View::make('pages.list')
		    ->with('data', $data);
	}
	
	public function getShoes()
	{
		return View::make('pages.list');
	}
	
	public function getProduct($id)
	{
	    $data = array(
	        'page' => Page::find($id)
	        );
		return View::make('pages.detail')
		    ->with('data', $data);
	}
}