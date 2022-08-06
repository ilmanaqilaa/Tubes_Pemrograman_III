<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publisher extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('publisher_model'); // load model publisher
        $this->load->library('Form_validation'); // load form publisher
        
    }

    public function index()
    {

        $data['title'] = "List Data Penerbit";
        $data['publisher'] = $this->publisher_model->getALL();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('publisher/index',$data);
        $this->load->view('templates/footer');
    }

    public function detail($publisher_id)
    {

        $data['title'] = "Detail Data Penerbit";
        $data['publisher'] = $this->publisher_model->getById($publisher_id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu.php');
        $this->load->view('publisher/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data['title'] = "Tambah Data Penerbit";
        $data['data_publisher'] =  

        $this->form_validation->set_rules('publisher_id', 'publisher_id', 'trim|required');
        $this->form_validation->set_rules('publisher_name', 'publisher_name', 'trim|required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('publisher/add', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "publisher_id"           => $this->input-> post('publisher_id'),
                "publisher_name"          => $this->input-> post('publisher_name'),
                "KEY"           => "ulbi123"
            ];

            $insert = $this->publisher_model->save($data);
            if($insert['response_code'] === 201){
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('publisher');
            } elseif ($insert['response_code'] === 400){
                $this->session->set_flashdata('message', 'Data Duplikat BOS!');
                redirect('publisher');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Ditambahkan ni BOS!');
                redirect('publisher');
            }
        }

    }
    
    public function edit($publisher_id)
    {

        $data['title'] = "Ubah Data Penerbit";
        $data['publisher'] = $this->publisher_model->getById($publisher_id);

        $this->form_validation->set_rules('publisher_id', 'publisher_id', 'trim|required');
        $this->form_validation->set_rules('publisher_name', 'publisher_name', 'trim|required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('publisher/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "publisher_id"     => $this->input-> post('publisher_id'),
                "publisher_name"     => $this->input-> post('publisher_name'),
                "KEY"               => "ulbi123"
            ];

            $update = $this->publisher_model->update($data);
            if($update['response_code'] === 201){
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
                redirect('publisher');
            } elseif ($update['response_code'] === 400){
                $this->session->set_flashdata('message', 'Data gagal Diubah');
                redirect('publisher');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Diubah ni BOS!');
                redirect('publisher');
            }
        }

    }

    public function delete($publisher_id)
    {
        $update = $this->publisher_model->delete($publisher_id);
            if($update['response_code'] === 200){
                $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
                redirect('publisher');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Dihapus ni BOS!');
                redirect('publisher');
            }
    }
}