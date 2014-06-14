<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $this->load->model('Noticia_model');
        $data['view'] = 'home';
        $data['dados'] =$this->Noticia_model->getTresNoticiasByDate() ;
        $this->load->view('includes/template', $data);
    }
    
    
}
