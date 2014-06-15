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
                SELECT doctor.name AS nomeMedico,clinical_specialty.id,clinical_specialty.name,person.phone
                FROM `clinical_specialty`,`doctor_specialty`,`doctor`,`scml_user`,person
                WHERE clinical_specialty.id=doctor_specialty.clinical_specialty_id AND
                    doctor_specialty.doctor_id=doctor.id AND
                    doctor.user_id=scml_user.id AND
                    scml_user.person_id= person.id
                ORDER BY name;
                ");
        $query = $query->result_array();
        return $query;
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
          public function getPedidosConsultaAdmin() {

        $this->db->select('clinical_specialty.name AS nomeEspecialidade,person.name as nomePessoa,doctor.name as nomeDoutor,health_insurer.name as nomeSeguro,status,date_time,mobile_phone');
        $this->db->from('appointment');
        $this->db->join('person','appointment.person_id = person.id');
        $this->db->join('clinical_specialty', 'appointment.specialty_id = clinical_specialty.id');
        $this->db->join('doctor', 'doctor.id = appointment.doctor_id');
        $this->db->join('health_insurer', 'health_insurer.id = appointment.insurer_id');
        
        $query = $this->db->get();
        $consulta = $query->result_array();
          
        return $consulta;
     }
     
               public function getPedidosDesteUtilizador($id) {

        $this->db->select('clinical_specialty.name AS nomeEspecialidade,person.name as nomePessoa,doctor.name as nomeDoutor,health_insurer.name as nomeSeguro,status,date_time,mobile_phone');
        $this->db->from('appointment');
        $this->db->join('person','appointment.person_id = person.id');
        $this->db->join('clinical_specialty', 'appointment.specialty_id = clinical_specialty.id');
        $this->db->join('doctor', 'doctor.id = appointment.doctor_id');
        $this->db->join('health_insurer', 'health_insurer.id = appointment.insurer_id');
        $this->db->where('person.id=appointment.person_id');
        
        $query = $this->db->get();
        $consultaUser = $query->result_array();
          
        return $consultaUser;
     }
     
}
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
