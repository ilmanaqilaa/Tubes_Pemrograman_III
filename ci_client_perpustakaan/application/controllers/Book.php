<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('book_model'); // load model book
        $this->load->library('Form_validation'); // load form book
        
    }

    public function index()
    {

        $data['title'] = "List Data Buku";
        $data['book'] = $this->book_model->getALL();
        $this->load->view('templates/header', $data);
        $this->load->view('book/index',$data);
        $this->load->view('templates/footer');
    }

    public function detail($book_id)
    {

        $data['title'] = "Detail Data Buku";
        $data['book'] = $this->book_model->getById($book_id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu.php');
        $this->load->view('book/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data['title'] = "Tambah Data Buku";
        $data['data_book'] =  

        $this->form_validation->set_rules('book_id', 'book_id', 'trim|required');
        $this->form_validation->set_rules('publisher_id', 'publisher_id', 'trim|required');
        $this->form_validation->set_rules('book_type_id', 'book_type_id', 'trim|required');
        $this->form_validation->set_rules('rack_id', 'rack_id', 'trim|required');
        $this->form_validation->set_rules('book_name', 'book_name', 'trim|required');
        $this->form_validation->set_rules('page', 'page', 'trim|required');
        $this->form_validation->set_rules('publication_year', 'publication_year', 'trim|required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('book/add', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "book_id"           => $this->input-> post('book_id'),
                "publisher_id"          => $this->input-> post('publisher_id'),
                "book_type_id" => $this->input-> post('book_type_id'),
                "rack_id"         => $this->input-> post('rack_id'),
                "book_name"         => $this->input-> post('book_name'),
                "page"         => $this->input-> post('page'),
                "publication_year"         => $this->input-> post('publication_year'),
                "KEY"           => "ulbi123"
            ];

            $insert = $this->book_model->save($data);
            if($insert['response_code'] === 201){
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('book');
            } elseif ($insert['response_code'] === 400){
                $this->session->set_flashdata('message', 'Data Duplikat BOS!');
                redirect('book');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Ditambahkan ni BOS!');
                redirect('book');
            }
        }

    }
    
    public function edit($book_id)
    {

        $data['title'] = "Ubah Data Buku";
        $data['book'] = $this->book_model->getById($book_id);

        $this->form_validation->set_rules('book_id', 'book_id', 'trim|required');
        $this->form_validation->set_rules('publisher_id', 'publisher_id', 'trim|required');
        $this->form_validation->set_rules('book_type_id', 'book_type_id', 'trim|required');
        $this->form_validation->set_rules('rack_id', 'rack_id', 'trim|required');
        $this->form_validation->set_rules('book_name', 'book_name', 'trim|required');
        $this->form_validation->set_rules('page', 'page', 'trim|required');
        $this->form_validation->set_rules('publication_year', 'publication_year', 'trim|required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('book/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "book_id"     => $this->input-> post('book_id'),
                "publisher_id"     => $this->input-> post('publisher_id'),
                "book_type_id"        => $this->input-> post('book_type_id'),
                "rack_id"       => $this->input-> post('rack_id'),
                "book_name"            => $this->input-> post('book_name'),
                "page"            => $this->input-> post('page'),
                "publication_year"            => $this->input-> post('publication_year'),
                "KEY"               => "ulbi123"
            ];

            $update = $this->book_model->update($data);
            if($update['response_code'] === 201){
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
                redirect('book');
            } elseif ($update['response_code'] === 400){
                $this->session->set_flashdata('message', 'Data gagal Diubah');
                redirect('book');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Diubah ni BOS!');
                redirect('book');
            }
        }

    }

    public function delete($book_id)
    {
        $update = $this->book_model->delete($book_id);
            if($update['response_code'] === 200){
                $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
                redirect('book');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Dihapus ni BOS!');
                redirect('book');
            }
    }
}