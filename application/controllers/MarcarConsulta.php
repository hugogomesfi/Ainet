<?php

class MarcarConsulta extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
            //rules to insert
            $this->form_validation->set_rules('nome', 'Nome', 'required|xss_clean');
            //$this->form_validation->set_rules('especialidades', 'Especialidades', 'required');
           // $this->form_validation->set_rules('titulo', 'Título', 'required|xss_clean');
           // $this->form_validation->set_rules('resumo', 'Resumo', 'required|xss_clean');
            
            if ($this->form_validation->run() == FALSE) {
                $data['view'] = 'ComporNoticia';
                $this->load->view('includes/template', $data);

                

            } else {
                $data['nome']   = $this->input->post('nome');
                $data['numSS'] = $this->input->post('numSS');
                $data['morada'] = $this->input->post('morada');
                $data['sexo'] = $this->input->post('sexo');
                $data['email'] = $this->input->post('email');
                $data['tel'] = $this->input->post('tel');
                
                //marcaçao
                
                $data['especialidade'] = $this->input->post('especialidade');
               // $data['name'] = $this->input->post('nomemedico');
               var_dump($data);
               die();
                $this->load->model('consulta_model');
                $this->consultaModel->insertNoticia($data);
                
                $data['view'] = 'ComporNoticia';
                $this->load->view('includes/template', $data);
            }
    }
    
       

}
