<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class officer_model extends CI_model
{
    private $_table_officer = 'officer';

    //Get data officer
    public function getDataofficer($officer_id)
    {
        //menggunakan query builder
        if($officer_id){
            $this->db->from($this->_table_officer);
            $this->db->where('officer_id', $officer_id);
            $query = $this->db->get()->result_array();
            return $query;
        } else {
            $this->db->from($this->_table_officer);
            $query = $this->db->get()->result_array();
            return $query;
        }
    }

    //Tambah data officer
    public function insertofficer($data)
    {
        //menggunakan query builder
        $this->db->insert($this->_table_officer, $data);
        return $this->db->affected_rows();
        //return $query;
    }
    //Ubah data officer
    public function updateofficer($data, $officer_id)
    {
        //menggunakan query builder
        $this->db->update($this->_table_officer, $data, ['officer_id' => $officer_id]);
        return $this->db->affected_rows();
        //return $query;
    }

    //Hapus data officer
    public function deleteofficer($officer_id)
    {
        //Menggunakan query builder
        $this->db->delete($this->_table_officer, ['officer_id' => $officer_id]);
        return $this->db->affected_rows();
        // return Query
    }
}

?>