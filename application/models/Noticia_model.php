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
        // $query = $this->db->get('publication');


        $this->db->select('*');
        $this->db->from('publication');
        $this->db->order_by('date');
        $this->db->join('publication_doctor_specialty', 'publication.id = publication_doctor_specialty.publication_id');
        $query = $this->db->get();
        $newsMedicos = $query->result_array();


        return $newsMedicos;
    }

    public function getLastNewsValencias() {
        $this->db->limit(4);

        $query = $this->db->query("
                SELECT *
                FROM `publication` 
                WHERE type='2' or type='3' or type='8' or type='9'");
  
        $newsValencias = $query->result_array();
   
        return $newsValencias;
        
    }

    public function getNoticiaPequena($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('publication');




        if ($query->num_rows() > 0) {
            $dados = $query->result_array();
            return $dados;
        }
        return false;

        //return $dados;
    }

    public function insertNoticia($data) {

        $this->db->insert('publication', $data);
        return true;
    }
    
//        public function insertImg() {
//
//        $this->db->select('*');
//        $this->db->from('publication');
//        //$this->db->order_by('date');
//        $this->db->join('image', 'publication.id = image.publication_id');
//        $query = $this->db->get();
//        $image = $query->result_array();
//        
//        return $image;
//    }

}
