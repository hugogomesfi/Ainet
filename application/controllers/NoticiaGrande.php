<?php

class NoticiaGrande extends CI_Controller{
    
    public function index() {
       // $this->load->helper('url');
        $this->load->view('NoticiaGrande');
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