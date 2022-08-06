<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booktype extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('booktype_model'); // load model booktype
        $this->load->library('Form_validation'); // load form booktype
        
    }

    public function index()
    {

        $data['title'] = "List Data Jenis Buku";
        $data['booktype'] = $this->booktype_model->getALL();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('booktype/index',$data);
        $this->load->view('templates/footer');
    }

    public function detail($book_type_id)
    {

        $data['title'] = "Detail Data Jenis Buku";
        $data['booktype'] = $this->booktype_model->getById($book_type_id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu.php');
        $this->load->view('booktype/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data['title'] = "Tambah Data Jenis Buku";
        $data['data_booktype'] =  

        $this->form_validation->set_rules('book_type_id', 'book_type_id', 'trim|required');
        $this->form_validation->set_rules('book_type_name', 'book_type_name', 'trim|required');


        if($this->form_validation->run()==false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('booktype/add', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "book_type_id"           => $this->input-> post('book_type_id'),
                "book_type_name"          => $this->input-> post('book_type_name'),
                "KEY"           => "ulbi123"
            ];

            $insert = $this->booktype_model->save($data);
            if($insert['response_code'] === 201){
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('booktype');
            } elseif ($insert['response_code'] === 400){
                $this->session->set_flashdata('message', 'Data Duplikat BOS!');
                redirect('booktype');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Ditambahkan ni BOS!');
                redirect('booktype');
            }
        }

    }
    
    public function edit($book_type_id)
    {

        $data['title'] = "Ubah Data Jenis Buku";
        $data['booktype'] = $this->booktype_model->getById($book_type_id);

        $this->form_validation->set_rules('book_type_id', 'book_type_id', 'trim|required');
        $this->form_validation->set_rules('book_type_name', 'book_type_name', 'trim|required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('booktype/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "book_type_id"     => $this->input-> post('book_type_id'),
                "book_type_name"     => $this->input-> post('book_type_name'),
                "KEY"               => "ulbi123"
            ];

            $update = $this->booktype_model->update($data);
            if($update['response_code'] === 201){
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
                redirect('booktype');
            } elseif ($update['response_code'] === 400){
                $this->session->set_flashdata('message', 'Data gagal Diubah');
                redirect('booktype');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Diubah ni BOS!');
                redirect('booktype');
            }
        }

    }

    public function delete($book_type_id)
    {
        $update = $this->booktype_model->delete($book_type_id);
            if($update['response_code'] === 200){
                $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
                redirect('booktype');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Dihapus ni BOS!');
                redirect('booktype');
            }
    }
}