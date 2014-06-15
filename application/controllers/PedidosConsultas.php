<?php

class PedidosConsultas extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $data['view'] = 'PedidosConsultas';
//        $data['noticias'] =$this->Noticia_model->getNoticiasMedico();
        $this->load->view('includes/template', $data);
    }
}
