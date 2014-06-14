<?php

class ComporNoticia extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $data['dados'] = 'ComporNoticia';
        $data['view'] = 'ComporNoticia';
        $data['dasdasd'] = 'dasda';
        $this->load->view('includes/template', $data);
    }
    
}
