<?php

class HomeMedico extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $data['view'] = 'HomeMedico';
        $this->load->view('includes/template', $data);
    }
}
