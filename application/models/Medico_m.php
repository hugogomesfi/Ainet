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
        $this->db->select('doctor.user_id,clinical_specialty.name,doctor.name AS nomemedico,person.mobile_phone');
  public function getMedico(){
        $this->db->select('doctor.id as doctor_id,doctor.name AS nomemedico,person.mobile_phone');
        $this->db->from('doctor');
       
        $this->db->join('scml_user', 'scml_user.person_id=doctor.id');
        $this->db->join('person', 'person.id=scml_user.person_id');
        $this->db->group_by("user_id");
        $queryResultado=$this->db->get();
        
        
        $this->db->select('clinical_specialty.name');
        $this->db->from('doctor');
        $this->db->join('doctor_specialty', 'doctor.id=doctor_specialty.doctor_id');
        $this->db->join('clinical_specialty', 'doctor_specialty.clinical_specialty_id=clinical_specialty.id'); 
        $queryResultado2=$this->db->get();
        
        $medicos=array();
        $especialidades=array();
        
        foreach ($queryResultado2->result_array() as $value) {
            $especialidades[]=array(
                'name' => $value['name'],
               
            );
        }
        
        foreach ($queryResultado->result_array() as $value) {
            $medicos[]=array(
                'user_id' => $value['user_id'],
                'nomemedico'=> $value['nomemedico'],
                'especialidade'=> $especialidades
            );
        }
        
        
       // $result = $queryResultado->result_array();
        
       return $medicos;
      
  }
  
  public function getMedico($id){
        $this->db->select('doctor.user_id,clinical_specialty.name,doctor.name AS nomemedico,person.mobile_phone');
        $this->db->from('doctor');
        $this->db->join('doctor_specialty', 'doctor.id=doctor_specialty.doctor_id');
        $this->db->join('clinical_specialty', 'doctor_specialty.clinical_specialty_id=clinical_specialty.id');
        $this->db->join('scml_user', 'scml_user.person_id=doctor.id');
        $this->db->join('person', 'person.id=scml_user.person_id');
        $this->db->where('user_id',$id);
        $this->db->group_by("user_id");
        
 //       $this->db->group_by("clinical_specialty.id");


        $result=$this->db->get();
        
        //$result = $queryResultado->result_array();
        
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
