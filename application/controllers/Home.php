<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $this->load->model('Noticia_model');
        $data['view'] = 'home';
        $data['newsMedicos'] =$this->Noticia_model->getTresNoticiasByDate() ;
        $data['newsValencias'] =$this->Noticia_model->getLastNewsValencias() ;
//        $data['image']=$this->Noticia_model->insertImg() ;
        $this->load->view('includes/template', $data);
    }
    
    
}
