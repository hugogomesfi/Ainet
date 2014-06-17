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
        $data['dados'] = $this->consulta_model->getEspecialidades();
        $data['view'] = 'MarcarConsulta';
        $this->load->view('includes/template',$data);
        
    }
    
    public function get_doctors(){
       // log_message('debug', 'Value of country is '+$this->input->post('country_id'));
        $especialidade=$this->input->post('country');
        //var_dump($especialidade);
        $this->load->model('Medico_m');
        //$states = array();
        $states = $this->Medico_m->getMedicosPorEspecialidade($especialidade);
        
        echo json_encode($states);
  }

}
