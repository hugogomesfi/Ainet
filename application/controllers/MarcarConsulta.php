<?php

class MarcarConsulta extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
            //rules to insert
            $this->form_validation->set_rules('nome', 'Nome', 'required|xss_clean');
            //$this->form_validation->set_rules('especialidades', 'Especialidades', 'required');
            //$this->form_validation->set_rules('titulo', 'Título', 'required|xss_clean');
            //$this->form_validation->set_rules('resumo', 'Resumo', 'required|xss_clean');
            
            if ($this->form_validation->run() == FALSE) {
                echo 'ola';
                die();
                $data['view'] = 'MarcarConsulta';
                $this->load->view('includes/template', $data);

                

            } else {
                echo 'ola';
                die();
                //se estiver autenticado so vai inserir os dados da consulta e o seu id de sessao
                if($this->session->userdata('user_id')){
                $this->load->model('Consulta_model');
                $this->load->model('Utilizador_model');
                $id=$this->session->userdata('user_id');
                //dados consulta
                $data['person_id']=$this->Utilizador_model->getInformacaoUser($id);          
                $data['speciality_id'] = $this->input->post('especialidades');
                $data['doctor_id'] = $this->input->post('medico');
                var_dump($data);
                die();
                $this->consulta_model->insertConsultaUserRegitado($data);
                  
                }else{
                    //caso nao esteja autenticado vai preencher todos os dados  
                 $this->load->model('Consulta_model');
                 $this->load->model('Medico_model');
                //dados da consulta
                $data1['specialty_id'] = $this->input->post('especialidades');
                $data1['doctor_id'] = $this->input->post('medico');
                //dados pessoais
                $data['name']   = $this->input->post('nome');
                $data['fiscal_id'] = $this->input->post('numSS');
                $data['address'] = $this->input->post('morada');
                $data['gender'] = $this->input->post('sexo');
                $data['email'] = $this->input->post('email');
                $data['mobile_phone'] = $this->input->post('tel');
               // $data['name'] = $this->input->post('nomemedico');
               
                $this->consulta_model->insertConsulta($data,$data1);
                }
                $data2['view'] = 'Saude/Consultas';
                $this->load->view('includes/template', $data2);
                
                //marcaçao
                

            }
    }
    
       

}
