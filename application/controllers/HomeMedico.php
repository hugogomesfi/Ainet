<?php

class HomeMedico extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        
        if ($this->session->userdata('role')==3) {
            $this->load->model('Noticia_model');
            $this->load->model('Utilizador_model');
            $data['view'] = 'HomeMedico';
            $this->load->model('Medico_model');
            $idmedico=$this->session->userdata('user_id');
            $data['especialidades'] =$this->Medico_model->getEspecialidadesMedico($idmedico);
            $data['medico'] =$this->Utilizador_model->getInformacaoUser($idmedico);
            $data['noticias'] =$this->Noticia_model->getNoticiasMedico();
            $this->load->view('includes/template', $data); 
        }else{
            redirect('Home');
        }
        
        
    }
}
