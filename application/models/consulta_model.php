<?php

class Consulta_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getEspecialidade(){
        $query = $this->db->query("
                SELECT *
                FROM `clinical_specialty`
                ORDER BY name;
                ");
        $query = $query->result_array();
        
        return $query;
    }
}