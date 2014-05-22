<?php

class Saude extends CI_Controller{
    
    public function index() {
       // $this->load->helper('url');
       // $this->load->view('Noticias');
    }
   function __construct() {
        parent::__construct();
        //para formularios $this->load->helper(form);
         $this->load->helper('url');
         $this->load->helper('form');
         $this->load->library('form_validation');
    }
    public function especialidades() {
        $this->load->view('Especialidades');
    }
     public function corpoClinico() {
        $this->load->view('CorpoClinico');
    }
}
?>