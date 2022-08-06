<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rack extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('rack_model'); // load model rack
        $this->load->library('Form_validation'); // load form rack
        
    }

    public function index()
    {

        $data['title'] = "List Data Rak";
        $data['rack'] = $this->rack_model->getALL();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('rack/index',$data);
        $this->load->view('templates/footer');
    }

    public function detail($rack_id)
    {

        $data['title'] = "Detail Data Rak";
        $data['rack'] = $this->rack_model->getById($rack_id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu.php');
        $this->load->view('rack/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data['title'] = "Tambah Data Rak";
        $data['data_rack'] =  

        $this->form_validation->set_rules('rack_id', 'rack_id', 'trim|required');
        $this->form_validation->set_rules('rack_name', 'rack_name', 'trim|required');
        $this->form_validation->set_rules('column', 'column', 'trim|required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('rack/add', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "rack_id"           => $this->input-> post('rack_id'),
                "rack_name"          => $this->input-> post('rack_name'),
                "column"          => $this->input-> post('column'),
                "KEY"           => "ulbi123"
            ];

            $insert = $this->rack_model->save($data);
            if($insert['response_code'] === 201){
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('rack');
            } elseif ($insert['response_code'] === 400){
                $this->session->set_flashdata('message', 'Data Duplikat BOS!');
                redirect('rack');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Ditambahkan ni BOS!');
                redirect('rack');
            }
        }

    }
    
    public function edit($rack_id)
    {

        $data['title'] = "Ubah Data Rak";
        $data['rack'] = $this->rack_model->getById($rack_id);

        $this->form_validation->set_rules('rack_id', 'rack_id', 'trim|required');
        $this->form_validation->set_rules('rack_name', 'rack_name', 'trim|required');
        $this->form_validation->set_rules('column', 'column', 'trim|required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('rack/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "rack_id"     => $this->input-> post('rack_id'),
                "rack_name"     => $this->input-> post('rack_name'),
                "column"     => $this->input-> post('column'),
                "KEY"               => "ulbi123"
            ];

            $update = $this->rack_model->update($data);
            if($update['response_code'] === 201){
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
                redirect('rack');
            } elseif ($update['response_code'] === 400){
                $this->session->set_flashdata('message', 'Data gagal Diubah');
                redirect('rack');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Diubah ni BOS!');
                redirect('rack');
            }
        }

    }

    public function delete($rack_id)
    {
        $update = $this->rack_model->delete($rack_id);
            if($update['response_code'] === 200){
                $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
                redirect('rack');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Dihapus ni BOS!');
                redirect('rack');
            }
    }
}