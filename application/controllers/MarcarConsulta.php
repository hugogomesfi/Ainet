<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MarcarConsulta
 *
 * @author HugoF
 */
class MarcarConsulta extends CI_Controller {
   
     public function index() {
       
        $this->load->view('MarcarConsulta');
    }
    
    function __construct() {
        parent::__construct();
        //para formularios $this->load->helper(form);
         $this->load->helper('url');
    }
}
