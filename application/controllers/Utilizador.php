<?php

class Utilizador extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {}

    public function autenticacao() {

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('email',    'Email',    'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['view'] = 'login_read_view';
            $this->load->view('includes/template', $data);
        } else {
            $this->load->model('Utilizador_model');
 
            if (!$this->Utilizador_model->autenticacao()) { 
                $this->session->set_flashdata('error', 'Email or password incorretos.');
                redirect('Utilizador/autenticacao');
            } 
            
            if ($this->session->userdata('role')==3) {
                redirect('HomeMedico');
            }else{
                redirect('Home');
            }
            
        }

    }

    public function logout() {
        $this->session->sess_destroy();
        redirect();
    }
    
    public function paginaPessoal() {
        $tipo=$this->session->userdata('role');
        switch ($tipo) {
            case 0:
                //administrador
            
                break;
            case 1:
                //Administrativo
                break;
             case 2:
                //Irmao
                break;
            case 3:
            redirect('HomeMedico');
                break;
            case 4:
                //Utente
                redirect('HomeUtente');
            
                break;

            default:redirect('Home');
                break;
        }
        $this->session->sess_destroy();
        redirect();
    }

}
