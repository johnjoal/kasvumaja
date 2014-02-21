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
	|	Route::get('/', 'AdminController@getIndex');
	|
	*/

    protected $layout = 'layouts.admin';
    
    /**
     * Instantiate a new AdminController instance.
     */
    public function __construct()
    {
        $this->beforeFilter('auth');
        //$this->beforeFilter('csrf', array('on' => 'post'));
    }

	public function getIndex()
	{
		$this->generate_pages_layout(PageType::HOME);
	}
	
	public function getProducts()
	{
	    $this->generate_pages_layout(PageType::GREENHOUSE);
	}
	
	public function getShoes()
	{
	    $this->generate_pages_layout(PageType::SHOES);
	}
	
	public function getOther()
	{
	    $this->generate_pages_layout(PageType::OTHER);
	}
	
	public function getPromo()
	{
	    $this->generate_pages_layout(PageType::PROMO);
	}
	
	public function getPageEdit($type, $id=null)
	{
	    $this->generate_page_edit_layout($id, $type);
	}
	
	public function getContact()
	{
		$this->generate_pages_layout(PageType::CONTACT);
	}
	
	public function postPageEdit()
	{
	    if(Input::get('id') != '')
	        $page = Page::find(Input::get('id'));
        else
	        $page = new Page;
        
        $page->type = Input::get('type');
        $page->lang = Input::get('lang');
        $page->title = Input::get('title');
        $page->content = Input::get('content');
        $page->description = Input::get('description');
        $page->show_on_cover = Input::get('show_on_cover');
        
        $page->save();
        
	    return Redirect::to('admin/page-edit/'.$page->type.'/'.$page->id)->withSuccess('Запись сохранена!');
	}
	
	public function postPageDelete($id=null) {
	    if (isset($id)) {
	        $page = Page::find($id);
	        $page->delete();
	        
	        $data = array(
                'pages' => Page::where('type', $page->type)->get(),
                'page_type' => $page->type);
	        return View::make('admin/partials/pages')
	            ->with('data', $data);
	    }
	}
	
	public function postUploadImage() {
	    $file = $_FILES['file'];
	    
	    $uploads_paht = public_path() . '/uploads/';
	    $image = Image::make($file['tmp_name'])->save($uploads_paht . $file['name']);
	    
	    $create_thumbnail = Input::get('create_thumbnail');
	    if ($create_thumbnail == 'true') {
	        $width = Input::get('width'); if (!isset($width)) $width = 267;
	        $height = Input::get('height'); if (!isset($height)) $width = 200;
	        $ext = explode('.', $file['name']);
	        $thumbnail_name = $ext[0] . '.thumbnail.' . $ext[1];
	        $image->resize($width, $height)->save($uploads_paht.$thumbnail_name);
	    }
	    
        if ($create_thumbnail == 'true')
            return array('url' => asset('uploads/'.$thumbnail_name), 'dataSrc' => '/uploads/'.$file['name']);
	    else
	        return array('url' => asset('uploads/'.$file['name']));
	}
	
	private function generate_page_edit_layout($id, $page_type) {
        if (isset($id))
	        $page = Page::find($id);
	    else
	        $page = new Page(array('lang' => 'ru', 'type' => $page_type));
        $this->layout->content = View::make('admin/page-edit')->with('page', $page);;
    }
    
    private function generate_pages_layout($page_type) {
        $data = array(
            'pages' => Page::where('type', $page_type)->get(),
            'page_type' => $page_type);
        $this->layout->content = View::make('admin/pages')
            ->with('data', $data);
    }
}