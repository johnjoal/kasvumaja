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
	    $data = array(
	        'page' => Page::where('type', PageType::HOME)
	            ->where('lang', App::getLocale())
	            ->first(),
	        'products' => Page::where('lang', App::getLocale()) //where('type', PageType::GREENHOUSE)
	            ->where('show_on_cover', true)
	            ->get()
	        );
		$this->layout->content = View::make('pages.index')->with('data', $data);;
	}
    
    public function getProducts()
	{
	    $this->generate_list_layout(PageType::GREENHOUSE);
	}
	
	public function getShoes()
	{
		$this->generate_list_layout(PageType::SHOES);
	}
	
	public function getOther()
	{
		$this->generate_list_layout(PageType::OTHER);
	}
	
	public function getPromo()
	{
		$this->generate_list_layout(PageType::PROMO);
	}
	
	public function getContact()
	{
		$this->generate_list_layout(PageType::CONTACT);
	}
	
	public function getDetail($id)
	{
	    $data = array(
	        'page' => Page::find($id)
	        );
		$this->layout->content = View::make('pages.detail')->with('data', $data);
	}
	
	private function generate_list_layout($page_type) {
        $data = array(
	        'products' => Page::where('type', $page_type)
	            ->where('lang', App::getLocale())
	            ->get()
	        );
		$this->layout->content = View::make('pages.list')->with('data', $data);
    }
}