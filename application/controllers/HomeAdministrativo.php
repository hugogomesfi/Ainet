<?php

class HomeAdministrativo extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        
        if ($this->session->userdata('role')==1) {
             $this->load->model('Consulta_model');  
         $this->load->library("pagination");        
         $config = array();
         	
        $config["base_url"] = site_url() ."/HomeAdministrativo/index";
        $config["total_rows"] = $this->Consulta_model->getNumerodeConsultas();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
                $config['full_tag_open'] = '<ul class="pagination">';
                $config['full_tag_close'] = '</ul>';            
                $config['prev_link'] = '&laquo;';
                $config['prev_tag_open'] = '<li>';
                $config['prev_tag_close'] = '</li>';
                $config['next_link'] = '&raquo;';
                $config['next_tag_open'] = '<li>';
                $config['next_tag_close'] = '</li>';
                $config['cur_tag_open'] = '<li class="active"><a href="#">';
                $config['cur_tag_close'] = '</a></li>';
                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';
        $config["use_page_numbers"]= TRUE;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);
        
        $this->pagination->initialize($config);
        
        $page = ($this->uri->segment(2)) ? $this->uri->segment(3) : 0;
        
          $this->load->model('Utilizador_model');
            $idUtente=$this->session->userdata('user_id');
           
            $data['view'] = 'HomeAdministrativo';
            $data['consultas'] = $this->Consulta_model->getPedidosConsultaAdmin($config["per_page"], $page);
            $data["links"] = $this->pagination->create_links();
            $data['utente'] =$this->Utilizador_model->getInformacaoUser($idUtente);
            $this->load->view('includes/template', $data); 
        }else{
            redirect('Home');
        }
        
        
    }
}
