<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table_user = 'user';

    //fungsi untuk mendapatkan data 
    public function getDataUser($user_id)
    {
        //Menggunakan query builder
        if ($user_id) {
            $this->db->from($this->_table_user);
            $this->db->where('user_id', $user_id);
            $query =  $this->db->get()->row_array();
            return $query;
        } else {
            $this->db->from($this->_table_user);
            $query =  $this->db->get()->result_array();
            return $query;
        }
    }

    //fungsi untuk mendapatkan data 
    public function getDataUserRegis($username)
    {
        //Menggunakan query builder
        if ($username) {
            $this->db->from($this->_table_user);
            $this->db->where('username', $username);
            $query =  $this->db->get()->row_array();
            return $query;
        } else {
            $this->db->from($this->_table_user);
            $query =  $this->db->get()->result_array();
            return $query;
        }
    }

    public function cekUsername($username)
    {
        if ($username) {
            $this->db->from($this->_table_user);
            $this->db->where('username', $username);
            $query =  $this->db->get()->row_array();
            return $query;
        } else {
            $this->db->from($this->_table_user);
            $query =  $this->db->get()->result_array();
            return $query;
        }
    }
    public function cekNoHP($nohp)
    {
        if ($nohp) {
            $this->db->from($this->_table_user);
            $this->db->where('no_hp', $nohp);
            $query =  $this->db->get()->row_array();
            return $query;
        } else {
            $this->db->from($this->_table_user);
            $query =  $this->db->get()->result_array();
            return $query;
        }
    }

    //fungsi untuk menambahkan data
    public function insertUser($data)
    {
        //Menggunakan Query Builder
        $this->db->insert($this->_table_user, $data);
        return $this->db->insert_id();
        // return $query;
    }

    public function loginYa($username,$password)
    {
        return $this->db->query("SELECT user_id FROM user where username = '$username' AND password = '$password'");
        // $this->db->from('user');
        // $this->db->where('username', $username);
        // $this->db->where('password', $password);
        // $this->db->limit(1);
        // $query =  $this->db->get()->row_array();
        // return $query;
    }

}
