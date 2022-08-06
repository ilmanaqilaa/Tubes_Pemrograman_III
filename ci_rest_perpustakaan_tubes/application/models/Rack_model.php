<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class rack_model extends CI_model
{
    private $_table_rack = 'rack';

    //Get data rack
    public function getDatarack($rack_id)
    {
        //menggunakan query builder
        if($rack_id){
            $this->db->from($this->_table_rack);
            $this->db->where('rack_id', $rack_id);
            $query = $this->db->get()->result_array();
            return $query;
        } else {
            $this->db->from($this->_table_rack);
            $query = $this->db->get()->result_array();
            return $query;
        }
    }

    //Tambah data rack
    public function insertrack($data)
    {
        //menggunakan query builder
        $this->db->insert($this->_table_rack, $data);
        return $this->db->affected_rows();
        //return $query;
    }
    //Ubah data rack
    public function updaterack($data, $rack_id)
    {
        //menggunakan query builder
        $this->db->update($this->_table_rack, $data, ['rack_id' => $rack_id]);
        return $this->db->affected_rows();
        //return $query;
    }

    //Hapus data rack
    public function deleterack($rack_id)
    {
        //Menggunakan query builder
        $this->db->delete($this->_table_rack, ['rack_id' => $rack_id]);
        return $this->db->affected_rows();
        // return Query
    }
}

?>