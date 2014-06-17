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
  
  public function getMedicos(){
      $this->db->limit($limit, $start);
        $this->db->select('doctor.id as doctor_id,doctor.name AS nomemedico,person.mobile_phone');
        $this->db->from('doctor');    
        $this->db->join('scml_user', 'scml_user.person_id=doctor.id');
        $this->db->join('person', 'person.id=scml_user.person_id');
        $result=$this->db->get();
             
        if ($result->num_rows() > 0) {
            $final=array();
            foreach ($result->result() as $cur_doctor) {
                // para cada 1 dos medicos                          
                $this->db->select('name, short_name');
                $this->db->from('clinical_specialty');            
                $this->db->join('doctor_specialty', 'doctor_specialty.clinical_specialty_id=clinical_specialty.id');
                $this->db->where('doctor_id', $cur_doctor->doctor_id);
                $tabelaespecialidades=$this->db->get();        
                $cur_doctor->especialidades = array();
                if ($tabelaespecialidades->num_rows() > 0) {   
                    $cur_doctor->especialidades = $tabelaespecialidades->result_array();
                }
                $final[]=$cur_doctor;
               // echo "teste<br/>";   
            }
           // $final=$result->result_array();
            return $final;
        }
        return false;
   
  }  
      public function insertNoticia($data) {
        $this->db->insert('publication', $data);
        return true;
    }
    
    public function getMedicosPorEspecialidade($idespecialidade){
         //var_dump($idespecialidade);
         
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->join('doctor_specialty', 'doctor.id=doctor_specialty.doctor_id');
        $this->db->where('doctor_specialty.clinical_specialty_id', $idespecialidade); 
        $queryResultado=$this->db->get();
        $result = $queryResultado->result_array();
        
        
        
       return $result;
      
  }
  
          public function getNumerodeMedicos() {
        return $this->db->count_all("doctor");
    }
      
  
}
