<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Genereted_model extends CI_model
{
    private $_table_keys = 'keys';


    public function saveKey($data){
        
        $this->db->insert($this->_table_keys, $data);
        return $this->db->affected_rows();
    }
} 


?>