<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Publication extends MY_Model{
    const DB_TABLE = 'publications';
    const DB_TABLE_PK = 'publication_id';

    public $publication_id;
    public $publication_name;
    public $author;
    
    
}
