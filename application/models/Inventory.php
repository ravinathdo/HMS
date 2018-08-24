<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inventory
 *
 * @author User
 */
class Inventory extends MY_Model {
    //put your code here
    const DB_TABLE = 'hms_inventory';
    const DB_TABLE_PK = 'id';
    
    public $id;
    public $item_name;
    public $qty;
    public $created_user;
    public $updated_date;
    
    
     function update($data, $id) {
        $this->db->where('hms_inventory.id', $id);
        return $this->db->update('hms_inventory', $data);
    }
}
