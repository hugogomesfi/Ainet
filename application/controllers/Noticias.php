<?php

class Noticias extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper("url");
        $this->load->model("Noticia_model");
    }

    public function index() {
        $this->load->library("pagination");

        $config = array();

        $config["base_url"] = site_url() . "/Noticias/index";
        $config["total_rows"] = $this->Noticia_model->getNumerodeNoticias();
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
        $config["use_page_numbers"] = TRUE;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(3) : 0;

        $data['dados'] = $this->Noticia_model->getNoticiaPequena($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data['view'] = 'Noticias';
        $this->load->view('includes/template', $data);
    }

    function insertNoticias() {
        if (!$this->session->userdata('user_id')) {

            redirect(site_url('/') . '');
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
                $data['title'] = $this->input->post('titulo');
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

    function eliminaNoticia() {

        $data['id'] = $this->input->get('noticia');
        //var_dump($data['id']);
        //die();
        $this->load->model('Noticia_model');
        $resultado = $this->Noticia_model->deleteNoticia($data);
        if ($resultado) {
            $data['view'] = 'HomeMedico';
            $data['sucesso'] = 'OK';
            $this->load->view('includes/template', $data);
        } else {
            $data['view'] = 'HomeMedico';
            $data['erros'] = 'Erro a Eliminar Noticia!';
            $this->load->view('includes/template', $data);
        }
    }

    function encontraNoticia() {

        $data['id'] = $this->input->get('noticia');
        $this->load->model('Noticia_model');
        $resultado = $this->Noticia_model->getNoticia($data);
        
        //array de arrays
        $id=$resultado[0]['updated_user_id'];
     
         $data['medico'] = $this->Noticia_model->getEscritorNoticia($id);
        
        $data['view'] = 'NoticiaGrande';
        $data['noticia'] = $resultado;
        $this->load->view('includes/template', $data);
    }
    
    
    
        
    function editaNoticia() {

        $data['id'] = $this->input->get('noticia');
        $this->load->model('Noticia_model');
        $resultado = $this->Noticia_model->getNoticia($data);

        $data['view'] = 'ComporNoticia';
        $data['noticia'] = $resultado;
        $this->load->view('includes/template', $data);
    }

    function updateNoticia() {
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
                $data['title'] = $this->input->post('titulo');
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

