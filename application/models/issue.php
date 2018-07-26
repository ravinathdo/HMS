<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Issue extends MY_Model{
    
    const DB_TABLE = 'issues';
    const DB_TABLE_PK = 'issue_id';


    public $issue_id;
    public $publication_id;
    public $issue_number;
    public $issue_date_publication;
    public $issue_cover;
    
}
