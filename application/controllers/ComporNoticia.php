<?php

class ComporNoticia extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $idmedico=$this->session->userdata('user_id');
        $this->load->model('Medico_m');
        $resultado=$this->Medico_m->getEspecialidadesMedico($idmedico);
        $data['especialidades'] = $resultado;
      
        $data['view'] = 'ComporNoticia';
        $this->load->view('includes/template', $data);
    }
    
}
