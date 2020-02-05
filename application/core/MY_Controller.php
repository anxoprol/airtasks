<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class MY_Controller extends CI_Controller
    {
        protected $data = array();
        public function __construct() {
            parent::__construct();
            // $this->load->helper('url');
            
        }

        public function frontend_page() 

        {
            $this->template['header'] =  $this->load->view('headers/header',  $this->data, TRUE);
             $this->template['menu']   =  $this->load->view('menu/menu',    $this->data, TRUE);
            //  $this->template['footer'] =  $this->load->view('footers/footer',  $this->data, TRUE);
             $this->template['page'] = $this->load->view($this->page, $this->data, TRUE);
             $this->load->view('main/principal', $this->template);

        }

       
    }