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
    
     public function getEspecialidadePorMedico(){
                 $query = $this->db->query("
                SELECT DISTINCT doctor.name AS nomeMedico,clinical_specialty.id,clinical_specialty.name,person.phone
                FROM `clinical_specialty`,`doctor_specialty`,`doctor`,`scml_user`,person
                WHERE clinical_specialty.id=doctor_specialty.clinical_specialty_id AND
                    doctor_specialty.doctor_id=doctor.id AND
                    doctor.user_id=scml_user.id AND
                    scml_user.person_id= person.id
                    GROUP BY doctor.name
                ORDER BY name;
                ");
        $query = $query->result_array();
        return $query;
     }
}