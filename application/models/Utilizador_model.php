<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Utilizador_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function autenticacao() {

    	$email = $this->input->post('email');
    	$password = hash('sha256',$this->input->post('password'));
            //var_dump($password);
            //die();


        $this->db->where('email', $email);
        $this->db->where('hashed_password', $password);
        $user = $this->db->get('scml_user');
        if ($user->num_rows() != 1) {
        	return false;
       	}
        
       	$newdata = array(
            'user_id' 	 => $user->row()->id,
            'user_name'	 => $user->row()->email,
            'logged_in'  => TRUE,
            'role'  => $user->row()->role,
            
        );

        $this->session->set_userdata($newdata);
        return true;
        
    }

    
    public function getInformacaoUser($idUtilizador) {

    	$this->db->select('*');
        $this->db->from('scml_user');
        $this->db->join('person', 'scml_user.person_id = person.id');
        $this->db->where('scml_user.id', $idUtilizador);
        $query = $this->db->get();
        $array=$query->result_array();
        return $array;
        
    }
    

}
