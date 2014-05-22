<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',true);
   $this->load->helper('url');
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('email', 'E-mail', 'trim|required|xss_clean|email');
   $this->form_validation->set_rules('passwd', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.&nbsp; User redirected to login page
     $this->load->view('index');
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.&nbsp; Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user->login($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}


