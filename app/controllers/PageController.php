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
	    $cache_key = PageType::HOME.App::getLocale();
	    $data = Cache::rememberForever($cache_key, function()
        {
            return array(
    	        'page' => Page::where('type', PageType::HOME)
    	            ->where('lang', App::getLocale())
    	            ->first(),
    	        'products' => Page::select('id','h1','description','meta_description')
    	        	->where('lang', App::getLocale())
    	            ->where('show_on_cover', true)
    	            ->get()
    	        );
        });
        
        $this->setLayout(View::make('pages.index')->with('data', $data), PageType::HOME, $data['page']->title, $data['page']->meta_description);
	}
    
    public function getProducts()
	{
	    $this->generate_list_layout(PageType::GREENHOUSE, trans('menu.greenhouse'));
	}
	
	public function getShoes()
	{
		$this->generate_list_layout(PageType::SHOES, trans('menu.shoes'));
	}
	
	public function getOther()
	{
		$this->generate_list_layout(PageType::OTHER, trans('menu.other'));
	}
	
	public function getPromo()
	{
		$this->generate_list_layout(PageType::PROMO, trans('menu.promo'));
	}
	
	public function getContact()
	{
		$data = array(
	        'page' => Page::select('title', 'h1', 'description','content')
	        	->where('lang', App::getLocale())
	        	->where('type', PageType::CONTACT)
	        	->first()
	        );
		$this->setLayout(View::make('pages.contact')->with('data', $data), PageType::CONTACT, trans('menu.contact'));
	}
	
	public function getDetail($id)
	{
	    $data = array(
	        'page' => Page::find($id)
	        );
		$this->setLayout(View::make('pages.detail')->with('data', $data), $data['page']->type, $data['page']->title, $data['page']->meta_description);
	}

	public function postSendMail()
	{
		$data = array(
			'lang' => App::getLocale(),
			'name' => Input::get('name'),
			'email' => Input::get('email'),
			'phone' => Input::get('phone'),
			'source' => Input::get('source'),
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
	
	private function generate_list_layout($page_type, $title) {
        $data = array(
	        'products' => Page::where('type', $page_type)
	            ->where('lang', App::getLocale())
	            ->get()
	        );
        if (isset($data['products']) && count($data['products']) > 0)
            $title = $data['products'][0]->title;
		$this->setLayout(View::make('pages.list')->with('data', $data), $page_type, $title);
    }

    private function setLayout($content, $page_type, $title='', $meta_description='') {
    	$this->setMeta($meta_description);
    	$this->layout->title = $title;
    	$this->layout->page_type = $page_type;
    	$this->layout->lang = App::getLocale();
    	$this->layout->content = $content;
    }
    
    private function setMeta($meta_description) {
        $internal = Cache::get('internal');
        $this->layout->keywords = $internal[App::getLocale()]['keywords'];
        if ($meta_description != '')
        	$this->layout->description = $meta_description;
        else
	        $this->layout->description = $internal[App::getLocale()]['description'];
    }
}