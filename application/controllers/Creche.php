<?php

class Creche extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $data['view'] = 'Creche';
        $this->load->view('includes/template', $data);
    }
}

