<?php

class Creche extends CI_Controller{
    
    public function index() {
       
        $this->load->view('Creche');
    }
    
   function __construct() {
        parent::__construct();
        //para formularios $this->load->helper(form);
         $this->load->helper('url');
         $this->load->helper('form');
         $this->load->library('form_validation');
    }
}
?>
