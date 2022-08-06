<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class BookType_model extends CI_model
{
    private $_table_booktype = 'book_type';

    //Get data booktype
    public function getDatabooktype($book_type_id)
    {
        //menggunakan query builder
        if($book_type_id){
            $this->db->from($this->_table_booktype);
            $this->db->where('book_type_id', $book_type_id);
            $query = $this->db->get()->result_array();
            return $query;
        } else {
            $this->db->from($this->_table_booktype);
            $query = $this->db->get()->result_array();
            return $query;
        }
    }

    //Tambah data booktype
    public function insertbooktype($data)
    {
        //menggunakan query builder
        $this->db->insert($this->_table_booktype, $data);
        return $this->db->affected_rows();
        //return $query;
    }
    //Ubah data booktype
    public function updatebooktype($data, $book_type_id)
    {
        //menggunakan query builder
        $this->db->update($this->_table_booktype, $data, ['book_type_id' => $book_type_id]);
        return $this->db->affected_rows();
        //return $query;
    }

    //Hapus data booktype
    public function deletebooktype($book_type_id)
    {
        //Menggunakan query builder
        $this->db->delete($this->_table_booktype, ['book_type_id' => $book_type_id]);
        return $this->db->affected_rows();
        // return Query
    }
}

?>