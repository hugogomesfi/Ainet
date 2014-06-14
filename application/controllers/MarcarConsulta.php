<?php

class MarcarConsulta extends CI_Controller {
   
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $data['view'] = 'MarcarConsulta';
        $this->load->view('includes/template', $data);
    }
    
}
