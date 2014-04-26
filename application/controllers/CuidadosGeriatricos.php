<?php

class CuidadosGeriatricos extends CI_Controller{
    
    public function index() {
       
        $this->load->view('CuidadosGeriatricos');
    }
    
    function __construct() {
        parent::__construct();
        //para formularios $this->load->helper(form);
         $this->load->helper('url');
    }
}
?>