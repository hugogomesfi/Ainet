<?php

class Creche extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $this->load->model('Noticia_model');
        $data['view'] = 'Creche';
        $data['newsCreche'] =$this->Noticia_model->getTresNoticiasCrecheByDate() ;
        $this->load->view('includes/template', $data);
    }
}

