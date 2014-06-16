<?php

class HomeUtente extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $this->load->model('Noticia_model');
        $data['view'] = 'HomeUtente';
         $idUtente=$this->session->userdata('user_id');
       
        
        $this->load->view('includes/template', $data);
    }
}
