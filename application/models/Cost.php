<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cost
 *
 * @author User
 */
class Cost extends MY_Model {

    //put your code here
    const DB_TABLE = 'hms_cost';
    const DB_TABLE_PK = 'id';

    public $id;
    public $description;
    public $amount;
    public $txn_type;
    public $created_user;

    public function getPostData() {
        $this->description = $this->input->post('description');
        $this->amount = $this->input->post('amount');
        $this->txn_type = $this->input->post('txn_type');
    }

}
