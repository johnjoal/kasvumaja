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
	        'products' => Page::select('id','title','description')
	        	->where('lang', App::getLocale()) //where('type', PageType::GREENHOUSE)
	            ->where('show_on_cover', true)
	            ->get()
	        );
		$this->setLayout(View::make('pages.index')->with('data', $data), PageType::HOME);
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
		$data = array(
	        'page' => Page::select('description','content')
	        	->where('lang', App::getLocale())
	        	->where('type', PageType::CONTACT)
	        	->first()
	        );
		$this->setLayout(View::make('pages.contact')->with('data', $data), PageType::CONTACT);
	}
	
	public function getDetail($id)
	{
	    $data = array(
	        'page' => Page::find($id)
	        );
		$this->setLayout(View::make('pages.detail')->with('data', $data), $data['page']->type);
	}

	public function postSendMail()
	{
		$data = array(
			'lang' => App::getLocale(),
			'name' => Input::get('name'),
			'email' => Input::get('email'),
			'phone' => Input::get('phone'),
			'subject' => Input::get('subject'),
			'content' => Input::get('content'),
			);

		Mail::send('emails.contact', $data, function($message)
	    {
	        $message->from('info@kasvumaja.ee', 'Kasvumaja kontakt');
	        $message->to('info@kasvumaja.ee')->subject(Input::get('subject'));
	    });

		return Redirect::back()->withSuccess(trans('strings.mail-success'));
	}
	
	private function generate_list_layout($page_type) {
        $data = array(
	        'products' => Page::where('type', $page_type)
	            ->where('lang', App::getLocale())
	            ->get()
	        );
        
		$this->setLayout(View::make('pages.list')->with('data', $data), $page_type);
    }

    private function setLayout($content, $page_type) {
    	$this->layout->page_type = $page_type;
    	$this->layout->lang = App::getLocale();
    	$this->layout->content = $content;
    }
}