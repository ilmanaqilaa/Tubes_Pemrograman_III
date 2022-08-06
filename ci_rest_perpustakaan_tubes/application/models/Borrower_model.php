<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Borrower_model extends CI_model
{
    private $_table_borrower = 'borrower';

    //Get data borrower
    public function getDataborrower($borrower_id)
    {
        //menggunakan query builder
        if($borrower_id){
            $this->db->from($this->_table_borrower);
            $this->db->where('borrower_id', $borrower_id);
            $query = $this->db->get()->result_array();
            return $query;
        } else {
            $this->db->from($this->_table_borrower);
            $query = $this->db->get()->result_array();
            return $query;
        }
    }

    //Tambah data borrower
    public function insertborrower($data)
    {
        //menggunakan query builder
        $this->db->insert($this->_table_borrower, $data);
        return $this->db->affected_rows();
        //return $query;
    }
    //Ubah data borrower
    public function updateborrower($data, $borrower_id)
    {
        //menggunakan query builder
        $this->db->update($this->_table_borrower, $data, ['borrower_id' => $borrower_id]);
        return $this->db->affected_rows();
        //return $query;
    }

    //Hapus data borrower
    public function deleteborrower($borrower_id)
    {
        //Menggunakan query builder
        $this->db->delete($this->_table_borrower, ['borrower_id' => $borrower_id]);
        return $this->db->affected_rows();
        // return Query
    }
}

?>