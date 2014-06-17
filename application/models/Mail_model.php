

<?php

class Mail_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function sendMail($data) {

        $to = "luis.migueldjordao@gmail.com";
        $erro = "ERRO!!";
        $enviada = "feitoooo";
        $from = $data['mail'];


        $this->load->library('email');


//        $this->load->library('email');
//
//        $this->email->from('your@example.com', 'Your Name');
//        $this->email->to('someone@example.com');
//        $this->email->cc('another@another-example.com');
//        $this->email->bcc('them@their-example.com');
//
//        $this->email->subject('Email Test');
//        $this->email->message('Testing the email class.');
//
//        $this->email->send();
//
//        echo $this->email->print_debugger();

        
        

//        $this->email->set_newline("\r\n");
        $this->email->from($from,'your name');
        $this->email->to($to);
        $this->email->subject($data['motive']);
//        $this->email->message($data['name']);
        $this->email->message($data['text']);
        $this->email->send();
//        echo $this->email->print_debugger();





        if ($this->email->send()) {
            var_dump($enviada);
        } else {
            var_dump($erro);
        }
    }

}
