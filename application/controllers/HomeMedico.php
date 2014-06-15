<?php

class HomeMedico extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $this->load->model('Noticia_model');
        $data['view'] = 'HomeMedico';
        $this->load->model('Medico_m');
        $idmedico=$this->session->userdata('user_id');
        
        $data['especialidades'] =$this->Medico_m->getEspecialidadesMedico($idmedico);
        
        $data['noticias'] =$this->Noticia_model->getNoticiasMedico();
        
        $this->load->view('includes/template', $data);
    }
}
