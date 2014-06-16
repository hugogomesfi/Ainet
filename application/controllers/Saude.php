<?php

class Saude extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $data['view'] = '...';
        $this->load->view('includes/template', $data);
    }


    public function especialidades() {
         $this->load->model('consulta_model');
         $data['dados'] = $this->consulta_model->getEspecialidades();
        
        $data['view'] = 'Especialidades';
        $this->load->view('includes/template', $data);
    }

    public function corpoClinico() {
        $this->load->model('Medico_m');
         $data['dados'] = $this->Medico_m->getMedicos();
         
        $data['view'] = 'CorpoClinico';
        $this->load->view('includes/template', $data);
    }

    public function Consultas() {
        $this->load->model('consulta_model');
        $this->load->model('Medico_m');
        $data['dadosMedico'] = $this->medico_m->getMedicos();
        $data['dados'] = $this->consulta_model->getEspecialidades();
        $data['view'] = 'MarcarConsulta';
        $this->load->view('includes/template',$data);
        
    }

}
