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
    
}
