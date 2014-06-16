<?php

class ContacteNos extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $data['view'] = 'ContacteNos';
        $this->load->view('includes/template', $data);
    }

}