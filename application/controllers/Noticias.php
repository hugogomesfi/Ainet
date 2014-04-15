<?php

class Noticias extends CI_Controller{
    
    public function index() {
       // $this->load->helper('url');
        $this->load->view('Noticias');
    }
    function __construct() {
        parent::__construct();
        //para formularios $this->load->helper(form);
         $this->load->helper('url');
    }
}
?>