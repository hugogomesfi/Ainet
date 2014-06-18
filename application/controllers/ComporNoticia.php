<?php

class ComporNoticia extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        
        if($this->session->userdata('role')==0||$this->session->userdata('role')==3){
            $idmedico=$this->session->userdata('user_id');
        $this->load->model('Medico_model');
        $resultado=$this->Medico_model->getEspecialidadesMedico($idmedico);
        $data['especialidades'] = $resultado;
      
        $data['view'] = 'ComporNoticia';
        $this->load->view('includes/template', $data);
        }else{
            redirect('Home');
        }
        
    }
    
}
