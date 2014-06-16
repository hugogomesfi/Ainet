<?php

class HomeUtente extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        
        if ($this->session->userdata('role')==4) {
            $this->load->model('consulta_model');
            $idUtente=$this->session->userdata('user_id');
            $data['view'] = 'HomeUtente';
            $data['consultas'] = $this->consulta_model->getPedidosDesteUtilizador($idUtente) ;  
            $this->load->view('includes/template', $data); 
        }else{
            redirect('Home');
        }
        
    }
}
