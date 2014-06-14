<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $data['view'] = 'home';
        $this->load->view('includes/template', $data);
    }
    
    
}
