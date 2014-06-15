<?php

class Noticia_model extends CI_Model {
    public function __construct() {
        parent::__construct();
         
    }
    
//    public function getNoticiaPequena(){
//        $query = $this->db->query("
//                SELECT publication.title,publication.abstract,publication.date,person.name
//                FROM `publication`,`scml_user`,`person`
//                where publication.updated_user_id=scml_user.person_id AND scml_user.person_id=person.id ");
//        $query = $query->result_array();
//        return $query;
//    }
        public function getNumerodeNoticias() {
        return $this->db->count_all("publication");
    }
    
      public function getTresNoticiasByDate() {
          $this->db->limit(3);
          $query = $this->db->get('publication');
          $dados = $query->result_array();  
        return $dados;
    }
    
    public function getNoticiaPequena($limit, $start){
        
        
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->from('publication');
        $this->db->join('scml_user', 'publication.updated_user_id=scml_user.person_id');
        $this->db->join('person', 'scml_user.person_id=person.id');
        $query = $this->db->get();



   //       $this->db->limit($limit, $start);
 //        $query = $this->db->get('publication');
//        $query = $this->db->query("
//                SELECT publication.title,publication.abstract,publication.date,person.name
//                FROM `publication`,`scml_user`,`person`
//                where publication.updated_user_id=scml_user.person_id AND scml_user.person_id=person.id ");
        
          return query;
 
//        if ($query->num_rows() > 0) {
//            $dados = $query->result_array();
//            return $dados;
//        }
//        return false;
        
        //return $dados;
    }
    
    
    
    
    
      public function insertNoticia($data) {
         
        $this->db->insert('publication', $data);
        return true;
    }
    

}
