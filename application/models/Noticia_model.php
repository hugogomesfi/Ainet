<?php

class Noticia_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getNoticiaPequena(){
        $query = $this->db->query("
                SELECT publication.title,publication.abstract,publication.date,person.name
                FROM `publication`,`scml_user`,`person`
                where publication.updated_user_id=scml_user.person_id AND scml_user.person_id=person.id ");
        $query = $query->result_array();
        
        return $query;
    }
      public function insertNoticia($data) {
         
        $this->db->insert('publication', $data);
        return true;
    }
}