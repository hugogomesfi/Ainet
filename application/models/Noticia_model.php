<?php

class Noticia_model extends CI_Model {
    public function __construct() {
        parent::__construct();
         
    }
    
    
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
//          $this->db->limit($limit, $start);
//         $query = $this->db->get('publication');
         	$this->db->limit($limit, $start);
                 $query = $this->db->get("publication");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;

        //return $dados;
    }
    
    
    
    
    
      public function insertNoticia($data) {
         
        $this->db->insert('publication', $data);
        return true;
    }
    
    public function getNoticiasMedico() {
          $id=$this->session->userdata('user_id');
        
          $this->db->select('*');
          $this->db->from('scml_user');
          $this->db->join('publication', 'scml_user.id = publication.id');
          $this->db->where('publication.id', $id);    
          $queryResultado=$this->db->get();
          $dados=$queryResultado->result_array();
          
          //$dados = $query->result_array();  
        return $dados;
    }
    
    public function deleteNoticia($data){
       $this->db->where('id',$data['id']); 
       $this->db->delete('publication'); 
       return true;
    }

}