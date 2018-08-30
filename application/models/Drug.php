<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Drug
 *
 * @author ravi
 */
class Drug extends MY_Model {

    //put your code here
    const DB_TABLE = 'hms_drug';
    const DB_TABLE_PK = 'id';

    public $id;
    public $drug_name;
    public $qty;
    public $price;
    public $mesure;

    public function getFillterStock($qty) {
        $this->db->select('hms_drug.*');
        $this->db->from('hms_drug');
        $where = " qty <= '" . $qty . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function updateDrug($data, $id) {
        $this->db->where('hms_drug.id', $id);
        return $this->db->update('hms_drug', $data);
    }

}
