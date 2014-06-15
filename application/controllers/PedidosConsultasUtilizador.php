<?php


class PedidosConsultasUtilizador extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $this->load->model('consulta_model');
        
        $data['view'] = 'PedidosConsultasUtilizador';
        $data['consulta'] = $this->consulta_model->getPedidosDesteUtilizador($id) ;

        $this->load->view('includes/template', $data);

    }
}