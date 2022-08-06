<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Form_validation'); // load form borrower
        
    }

    public function index()
    {

        $data['title'] = "Home";

        $this->load->view('home/index',$data);

    }
}