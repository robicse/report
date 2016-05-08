<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Welcome extends Controller_Application {
	
	public function action_index()
	{
		$this->template->Page_Title = 'Page Title';
		$this->template->mainContent = 'content here';
	}
	
}