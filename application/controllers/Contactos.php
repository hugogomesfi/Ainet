<?php

class Contactos extends CI_Controller{
    
    public function index() {
       
        $this->load->view('Contactos');
    }
    
    function __construct() {
        parent::__construct();
        //para formularios $this->load->helper(form);
         $this->load->helper('url');
    }
}
?>