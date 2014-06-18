<?php

class Consulta_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getEspecialidades(){
          
        
                $this->db->select('clinical_specialty.id,clinical_specialty.name, clinical_specialty.short_name, doctor_specialty.doctor_id');
                $this->db->from('clinical_specialty');            
                $this->db->join('doctor_specialty', 'doctor_specialty.clinical_specialty_id=clinical_specialty.id');
                $result=$this->db->get(); 
                
         if ($result->num_rows() > 0) {
             $final=array();
             foreach ($result->result() as $cur_specialty) {
                // para cada 1 das especialidades                         
                $this->db->select('doctor.id, doctor.name');
                $this->db->from('doctor');            
                $this->db->where('id', $cur_specialty->doctor_id);
                $tabeladoutores=$this->db->get();        
                $cur_specialty->doutores = array();
                if ($tabeladoutores->num_rows() > 0) {   
                    $cur_specialty->doutores = $tabeladoutores->result_array();
                }
                $final[]=$cur_specialty;
                 
            }
            //var_dump($final); 
            //die();
            return $final;
         }

        return false;
    }
    
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
          public function getPedidosConsultaAdmin() {

        $this->db->select('clinical_specialty.name AS nomeEspecialidade,person.name as nomePessoa,doctor.name as nomeDoutor,status,date_time,mobile_phone');
        $this->db->from('appointment');
        $this->db->join('person','appointment.person_id = person.id');
        $this->db->join('clinical_specialty', 'appointment.speciality_id = clinical_specialty.id');
        $this->db->join('doctor', 'doctor.id = appointment.doctor_id');
        //$this->db->join('health_insurer', 'health_insurer.id = appointment.insurer_id');
        
        $query = $this->db->get();
        $consulta = $query->result_array();
          
        return $consulta;
     }
     
               public function getPedidosDesteUtilizador($id) {

        $this->db->select('clinical_specialty.name AS nomeEspecialidade,person.name as nomePessoa,doctor.name as nomeDoutor,appointment.status,appointment.date_time,person.mobile_phone');
        $this->db->from('appointment');
        $this->db->join('person','appointment.person_id = person.id');
        $this->db->join('scml_user','scml_user.person_id = person.id');
        $this->db->join('clinical_specialty', 'appointment.speciality_id = clinical_specialty.id');
        $this->db->join('doctor', 'doctor.id = appointment.doctor_id');
       // $this->db->join('health_insurer', 'health_insurer.id = appointment.insurer_id');
        $this->db->where('scml_user.id',$id);
        
        $query = $this->db->get();
        $consultaUser = $query->result_array();
          
        return $consultaUser;
     }
     
      public function insertConsulta($dadosPessoa,$dadosConsulta) {
          //uso de uma trans para poder fazer mais do que uma consulta
            $this->db->trans_start();
            $this->db->insert('person', $dadosPessoa);

            $person_id = $this->db->insert_id();
            $dadosConsulta['person_id']="$person_id";
            $idDoctor=$dadosConsulta['doctor_id'];
            $di= $this->getMedico($idDoctor);
            $dadosConsulta['doctor_id']= $di;
            $this->db->insert('appointment', $dadosConsulta);
            $this->db->trans_complete();
            return  true;
    }
    
          public function insertConsultaUserRegitado($data) {

        $this->db->insert('appointment', $data);
        return true;
    }
    
    public function getMedico($idDoctor){
         //var_dump($idespecialidade);
         
        $this->db->select('doctor.id');
        $this->db->from('doctor');
        $this->db->join('scml_user', 'scml_user.id=doctor.user_id');
        $this->db->where('doctor.user_id', $idDoctor); 
        $queryResultado=$this->db->get();
        $result = $queryResultado->result_array();
        
        
        
       return $result[0]['id'];
      
  }
     
     
}
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     