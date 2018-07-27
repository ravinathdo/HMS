<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Patient
 *
 * @author ravi
 */
class Patient extends MY_Model {

    //put your code here
    const DB_TABLE = 'hms_patient';
    const DB_TABLE_PK = 'id';

    public $id;
    public $first_name;
    public $last_name;
    public $telephone;
    public $email;
    public $pword;
    public $status_code;
    public $user_role;

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }
    
    
    public function getPostData() {
        $this->first_name = $this->input->post('first_name');
        $this->last_name = $this->input->post('last_name');
        $this->telephone = $this->input->post('telephone');
        $this->email = $this->input->post('email');
        $this->pword = $this->input->post('pword');
        $this->status_code = 'ACTIVE';
        $this->user_role = 'PATIENT';
    }

}
