<?php 

class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$helper = array(
			'html',
			'url'
		);
		$this->load->helper($helper);
		$library = array(
			'session'
		);
		$this->load->library($library);
	}

	/*
	@param view, 
	@optional data[header, content, footer]
	*/
	protected function template($view, $data = null) {

		$contents['page'] = $view;
		(!isset($data['header'])) ? $contents['header'] = null : $contents['header'] = $data['header'] ;
		(!isset($data['content'])) ? $contents['content'] = null : $contents['content'] = $data['content'] ;
		(!isset($data['footer'])) ? $contents['footer'] = null : $contents['footer'] = $data['footer'] ;
		$this->load->view("template", $contents);
	}

	
}