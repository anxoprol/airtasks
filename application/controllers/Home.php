<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent:: __construct();

		// $this->load->model('Items_model','items');
	}

	public function index()
	{
		$this->page = 'home';
		$this->data = array();
		$this->frontend_page(); 

	}
	
}