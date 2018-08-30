<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Center
 *
 * @author User
 */
class Center extends MY_Model {

    //put your code here
    const DB_TABLE = 'hms_center';
    const DB_TABLE_PK = 'id';
    
    public $id;
    public $center_name;
}
