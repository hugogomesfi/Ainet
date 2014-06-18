<?php

class Irmandade extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $this->load->model('Noticia_model');
        $data['view'] = 'Irmandade';
        $data['newsIrmandade'] =$this->Noticia_model->getTresNoticiasIrmandadeByDate() ;
        $this->load->view('includes/template', $data);
    }
    
}

