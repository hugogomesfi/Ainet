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
//    public function getMedicoPorEspecialidade(){
//          $query = $this ->db -> query(" 
//                 SELECT doctor.name, ");
//          
//              $query = $this->db->query("
//                SELECT publication.title,publication.abstract,publication.date,person.name,clinical_specialty.name
//                FROM `publication`,`scml_user`,`person`
//                where publication.updated_user_id=scml_user.person_id AND
//                scml_user.person_id=person.id publication.id=publication_doctor_specialty.publication_id AND
//                doctor_specialty.id=publication_doctor_specialty.doctor_specialty_id AND
//                clinical_specialty.id=doctor_specialty.clinical_specialty_id ");
//        $query = $query->result_array();
//        $this->db->select('*');
//        $this->db->from('');
//        return $query; 
//        
//        
//                $this->db->select('*');
//                $this->db->from('publication');
//                $this->db->join('scml_user', 'publication.updated_user_id=scml_user.person_id');
//                $this->db->join('person', 'scml_user.person_id=person.id');
//                $query = $this->db->get();
//      
//  }
      public function insertNoticia($data) {
         
        $this->db->insert('publication', $data);
        return true;
    }
}