<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Users_model extends CI_Model { 
    public function __construct() {
       parent::__construct();
    }


    public function saveUser($data){
        $this->db->insert('users', $data);
            $dataSession = array(
                'name' => $data['name'],
                'email' => $data['email'],
                'id' => $this->db->insert_id()
            );
            // $this->session->set_userdata($dataSession);


    }
}
