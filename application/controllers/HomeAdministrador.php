<?php

class HomeAdministrador extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        
        if ($this->session->userdata('role')==0) {
           
            $data['view'] = 'HomeAdministrador';
            $this->load->view('includes/template', $data); 
        }else{
            redirect('Home');
        }
        
        
    }
}
