<?php

class Noticias extends CI_Controller{
    
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
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);
        
        $this->pagination->initialize($config);
        
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        $data['dados'] = $this->Noticia_model->getNoticiaPequena($config["per_page"], $this->uri->segment(3));
        $data["links"] = $this->pagination->create_links();
        $data['view'] = 'Noticias';
        $this->load->view('includes/template', $data);
        
        
    }
    
    
        
    
    
    
    
        function insertNoticias() {
        if (!$this->session->userdata('user_id')) {
            
            redirect(site_url('/') . 'login');
        } else {
            //rules to insert
            $this->form_validation->set_rules('corpoNoticia', 'Compor Noticia', 'required|xss_clean');
            //$this->form_validation->set_rules('especialidades', 'Especialidades', 'required');
            $this->form_validation->set_rules('titulo', 'Título', 'required|xss_clean');
            $this->form_validation->set_rules('resumo', 'Resumo', 'required|xss_clean');
            
            if ($this->form_validation->run() == FALSE) {
                $data['view'] = 'ComporNoticia';
                $this->load->view('includes/template', $data);

                

            } else {

                $data['updated_user_id'] = $this->session->userdata('user_id');
                $data['title']   = $this->input->post('titulo');
                $data['body'] = $this->input->post('corpoNoticia');
                $data['abstract'] = $this->input->post('resumo');
               // $data['name'] = $this->input->post('nomemedico');
                
                $this->load->model('Noticia_model');
                $this->Noticia_model->insertNoticia($data);
                
                $data['view'] = 'ComporNoticia';
                $this->load->view('includes/template', $data);
            }
        }
    }
    

}
