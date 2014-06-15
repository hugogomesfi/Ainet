<?php

class Medico_m extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getMedico(){
        $query = $this->db->query("
                SELECT publication.title,publication.abstract,publication.date,person.name
                FROM `publication`,`scml_user`,`person`
                WHERE publication.updated_user_id=scml_user.person_id AND scml_user.person_id=person.id ");
        $query = $query->result_array();
        $this->db->select('*');
        $this->db->from('');
        return $query;
        
    }
    public function getEspecialidadesMedico($idmedico){
        
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->join('doctor_specialty', 'doctor.id=doctor_specialty.doctor_id');
        $this->db->join('clinical_specialty', 'doctor_specialty.clinical_specialty_id=clinical_specialty.id');
        $this->db->where('doctor.user_id', $idmedico); 
        $queryResultado=$this->db->get();
        $result = $queryResultado->result_array();
        
       return $result;
      
  }
      public function insertNoticia($data) {
         
        $this->db->insert('publication', $data);
        return true;
    }
}