<?php

class Irmandade extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $data['view'] = 'Irmandade';
        $this->load->view('includes/template', $data);
    }
    
}

