<?php

class NoticiasMedicos extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
        $this->load->library('form_validation');
        $this->load->helper("url");
        $this->load->model("Noticia_model");
        
        
    }
    
    public function index() {
        $this->load->library("pagination");
        
         $config = array();
         	
        $config["base_url"] = base_url() ."Noticias/";
        $config["total_rows"] = $this->Noticia_model->getNumerodeNoticias();
        $config["per_page"] = 4;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);
        
        $this->pagination->initialize($config);
        
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        $data['dados'] = $this->Noticia_model->getNoticiaPequenaSaude($config["per_page"], $this->uri->segment(3));
        $data["links"] = $this->pagination->create_links();
        $data['view'] = 'NoticiasMedicos';
        $this->load->view('includes/template', $data);
        
        
    }
    
    
        
    
    
    
    
        
    

}
