<?php defined('SYSPATH') or die('No direct script access.');
abstract class Controller_Application extends Controller_Template {
	
	public function before()
	{
		parent::before();
		View::set_global('SITE_NAME', 'Windybd Employee Portal');
		$this->template->header = view::factory('Template/header');
		$this->template->sidebar = Menu::factory('example');
		$this->template->mainContent = '';
		$this->template->Page_Title = '';
		$this->template->breadcrumb = 'lksdfjlkfsdjlkfd';
		$this->template->footer = view::factory('Template/footer');;
		$this->template->site_title = __('SITE_NAME');
		$this->template->styles = array();
		$this->template->scripts = array();
	}
	
}