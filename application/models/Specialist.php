<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Specialist
 *
 * @author ravi
 */
class Specialist extends MY_Model {
    //put your code here
    //put your code here
    const DB_TABLE = 'hms_specialist';
    const DB_TABLE_PK = 'id';
    
    public $id;
    public $specialist;
    
     public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }
}
