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
    	$this->setTitleAndMeta();
    	$this->layout->page_type = $page_type;
    	$this->layout->lang = App::getLocale();
    	$this->layout->content = $content;
    }

    private function setTitleAndMeta() {
    	if (App::getLocale() == 'ru') {
    		$this->layout->title = 'ПРОДАЖА ТЕПЛИЦ/ПАРНИКОВ';
    		$this->layout->keywords = 'теплица, парник, сад, огород, поликарбонат, дача, купить,установка теплиц, теплицы, парники, парников, теплицу';
    		$this->layout->description = 'Продаются новые теплицы/парники из поликарбоната Трешка. Каркас-оцинкованный металлический профиль, который способен выдерживать снеговые нагрузки до 180кг/м2. Высота 2 метра, ширина 3 метра и длина парника Трешка–4,6,8,... метра. Модель Двушка. Снеговые нагрузки до 240кг/м2. Высота 2,2 метра, ширина 2 метра и длина теплицы «Двушка»–4,6,8,... метра. Цена на теплицу с поликарбонатом от 388 евро (2x4)';
    	}
    	else {
    		$this->layout->title = 'KASVUHOONETE Müük';
    		$this->layout->keywords = 'kasvumaja, kasvuhoone, kasvuhoonete müük, suvila, aed, polükarbonaad, osta';
    		$this->layout->description = 'Müüakse uued kasvuhooned polükarbonaadist TRESHKA mudel 2013a. Karkass on valmistatud tsingitud terasprofiilist, mis talub lumekoormust kuni 180kg/m2. Kasvuhoone Treshka laius 3 meetrit, kõrgus 2 meetrit ja pikkus on 4,6,8meetrit. Kasvuhoone Dvushka. Lumekoormust kuni 240kg/m2. Kasvuhoone Dvushka laius 2 meetrit, kõrgus 2,2 meetrit ja pikkus on 4,6,8meetrit.. Hind polükarbonaadiga alates 388 EURO(2X4)';
    	}
    }
}