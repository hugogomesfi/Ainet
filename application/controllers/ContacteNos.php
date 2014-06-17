<?php

class ContacteNos extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['view'] = 'ContacteNos';
        $this->load->view('includes/template', $data);
    }

    function sendMail() {

            
            $this->form_validation->set_rules('fullName', 'Nome Completo', 'required|xss_clean');
            //$this->form_validation->set_rules('especialidades', 'Especialidades', 'required');
            $this->form_validation->set_rules('email', 'Mail', 'required|xss_clean');
            $this->form_validation->set_rules('texto', 'Texto', 'required|xss_clean');
            $this->form_validation->set_rules('motivo', 'Motivo', 'required|xss_clean');

//            if ($this->form_validation->run() == FALSE) {
//                $data['view'] = 'ContacteNos';
//                $this->load->view('includes/template', $data);
//                
//            } 
//            else {

                $data['name'] = $this->input->post('fullName');
                $data['mail'] = $this->input->post('mail');
                $data['text'] = $this->input->post('text');
                $data['motive'] = $this->input->post('motive');

                $this->load->model('Mail_model');
                $this->Mail_model->sendMail($data);

                $data['view'] = 'ContacteNos';
                $this->load->view('includes/template', $data);
//            }
        }
    

}
