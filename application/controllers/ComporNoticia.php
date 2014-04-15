<?php

class ComporNoticia extends CI_Controller{
    
    public function index() {
       // $this->load->helper('url');
        $this->load->view('ComporNoticia');
    }
    function __construct() {
        parent::__construct();
        //para formularios $this->load->helper(form);
         $this->load->helper('url');
    }
}
?>