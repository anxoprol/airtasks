<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
	function __construct(){
		parent:: __construct();

        $this->load->model('users_model','users');
    }

    public function saveUser(){
        $t= date('Y-m-d H:i:s');
        // ------------------ENCRIPTACIÓN DE CONTRASEÑA---------------------------------------------------------------------



        $userData = $this->input->post();
		$hashPassword = password_hash($userData['password'], PASSWORD_BCRYPT);
        //array con los datos que queremos que se guarden en la tabla de Users en la BD.
        
        $data = array(
            'name' => $userData['user'],
            'email' => $userData['email'],
            'password' => $hashPassword,
            'status' => 1,
            'created_at' => $t,
        );
        
        if($this->users->saveUser($data)){
            echo json_encode('true');
            redirect('/homework');
        }
    }

}