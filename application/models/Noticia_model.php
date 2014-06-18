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
        $this->db->select('*');
        $this->db->from('publication');
        $this->db->where('type', '0');
        $this->db->order_by('date', 'desc');
        $query = $this->db->get();
        $newsMedicos = $query->result_array();


        return $newsMedicos;
    }

    public function getLastNewsValencias() {
        $this->db->limit(4);

        $query = $this->db->query("
                SELECT *
                FROM `publication` 
                WHERE type='2' or type='3' or type='8' or type='9'
                ORDER BY date");

        $newsValencias = $query->result_array();

        return $newsValencias;
    }



    
    public function getNoticiaPequena($limit, $start){

         	$this->db->limit($limit, $start);
                $this->db->order_by('date','desc');
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

    public function getNoticiaPequenaSaude($limit, $start) {
//          $this->db->limit($limit, $start);
//         $query = $this->db->get('publication');

        $this->db->limit($limit, $start);
        $this->db->select("*");
        $this->db->from('publication');
        $this->db->where('type', '0');
        $query = $this->db->get();

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
        $id = $this->session->userdata('user_id');

        $this->db->select('*');
        $this->db->from('scml_user');
        $this->db->join('publication', 'scml_user.id = publication.updated_user_id');
        $this->db->where('publication.updated_user_id', $id);
        $this->db->order_by("date", "desc");
        $queryResultado = $this->db->get();
        $dados = $queryResultado->result_array();

        //$dados = $query->result_array();  
        return $dados;
    }

    public function deleteNoticia($data) {
        $this->db->where('id', $data['id']);
        $this->db->delete('publication');
        return true;
    }



    public function getNoticia($data) {
        $this->db->select('*');
        $this->db->from('publication');
        $this->db->join('image', 'publication.id=image.publication_id');
        $this->db->where('publication.id', $data['id']);
        $queryResultado = $this->db->get();
        $dados = $queryResultado->result_array();
        return $dados;
    }

    public function getTresNoticiasCrecheByDate() {
        $this->db->limit(3);
        $this->db->select('*');
        $this->db->from('publication');
        $this->db->where('type', '8');
        $this->db->order_by('date', 'desc');
        $query = $this->db->get();
        $newsCreche = $query->result_array();
        return $newsCreche;
    }

    public function getTresNoticiasIrmandadeByDate() {
        $this->db->limit(3);
        $this->db->select('*');
        $this->db->from('publication');
        $this->db->where('type', '9');
        $this->db->order_by('date', 'desc');
        $query = $this->db->get();
        $newsIrmandade = $query->result_array();
        return $newsIrmandade;
    }

    
    
        public function getEscritorNoticia($idpublication) {
        $this->db->select('*');
        $this->db->from('scml_user');
        $this->db->join('publication', 'publication.updated_user_id=scml_user.id');
        $this->db->join('person', 'scml_user.person_id=person.id');
        $this->db->where('publication.updated_user_id', $idpublication);
        
        $queryResultado=$this->db->get();
        $resultado = $queryResultado->result_array();
    
        return $resultado;
    }
    
    
    
}
