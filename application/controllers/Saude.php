<?php

class Saude extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['view'] = '...';
        $this->load->view('includes/template', $data);
    }

    public function especialidades() {
        $this->load->model('consulta_model');
        $data['dados'] = $this->consulta_model->getEspecialidades();

        $data['view'] = 'Especialidades';
        $this->load->view('includes/template', $data);
    }

    public function corpoClinico() {
        $this->load->model('Medico_m');
        $this->load->library("pagination");
        $config = array();

        $config["base_url"] = site_url() . "/Saude/corpoClinico";
        $config["total_rows"] = $this->Medico_m->getNumerodeMedicos();
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

        $data['dados'] = $this->Medico_m->getMedicos($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data['view'] = 'CorpoClinico';
        $this->load->view('includes/template', $data);
    }

    public function Consultas() {
        $this->load->model('consulta_model');
        $data['dados'] = $this->consulta_model->getEspecialidades();
        $data['view'] = 'MarcarConsulta';
        $this->load->view('includes/template', $data);
    }

    public function get_doctors() {
        // log_message('debug', 'Value of country is '+$this->input->post('country_id'));
        $especialidade = $this->input->post('country');
        //var_dump($especialidade);
        $this->load->model('Medico_m');
        //$states = array();
        $states = $this->Medico_m->getMedicosPorEspecialidade($especialidade);

        echo json_encode($states);
    }

}
