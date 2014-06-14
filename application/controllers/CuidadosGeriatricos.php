<?php

class CuidadosGeriatricos extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $data['view'] = 'CuidadosGeriatricos';
        $this->load->view('includes/template', $data);
    }
    
    public function residencial() {
        $this->load->view('Residencial');
        $data['view'] = 'Residencial';
        $this->load->view('includes/template', $data);
    }

}
