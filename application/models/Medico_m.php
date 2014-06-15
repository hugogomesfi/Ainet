<?php

class Medico_m extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    
    public function getEspecialidadesMedico($idmedico){
        
        $this->db->select('clinical_specialty.name,doctor_specialty.availability,doctor.name AS nomemedico');
        $this->db->from('doctor');
        $this->db->join('doctor_specialty', 'doctor.id=doctor_specialty.doctor_id');
        $this->db->join('clinical_specialty', 'doctor_specialty.clinical_specialty_id=clinical_specialty.id');
        $this->db->where('doctor.user_id', $idmedico); 
        $queryResultado=$this->db->get();
        $result = $queryResultado->result_array();
        
       return $result;
      
  }
  
  public function getMedico(){
        $this->db->select('clinical_specialty.name,doctor.name AS nomemedico,person.mobile_phone');
        $this->db->from('doctor');
        $this->db->join('doctor_specialty', 'doctor.id=doctor_specialty.doctor_id');
        $this->db->join('clinical_specialty', 'doctor_specialty.clinical_specialty_id=clinical_specialty.id');
        $this->db->join('scml_user', 'scml_user.person_id=doctor.id');
        $this->db->join('person', 'person.id=scml_user.person_id');
        $this->db->group_by("nomemedico");


        $queryResultado=$this->db->get();
        $result = $queryResultado->result_array();
        
       return $result;
      
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
