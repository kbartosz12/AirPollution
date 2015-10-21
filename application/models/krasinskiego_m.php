<?php


class Users_m extends CI_Model{
    
private $table = 'krasinskiego';
private  $key = 'krasinskiego_id';

public function __construct() 
{
    parent::__construct();
    $this->load->database();
       
}

public function insert($data) 
{
    
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
    
 }
}