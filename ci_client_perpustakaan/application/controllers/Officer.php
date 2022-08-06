<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Officer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('officer_model'); // load model officer
        $this->load->library('Form_validation'); // load form officer
        
    }

    public function index()
    {

        $data['title'] = "List Data Petugas";
        $data['officer'] = $this->officer_model->getALL();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('officer/index',$data);
        $this->load->view('templates/footer');
    }

    public function detail($officer_id)
    {

        $data['title'] = "Detail Data Petugas";
        $data['officer'] = $this->officer_model->getById($officer_id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu.php');
        $this->load->view('officer/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data['title'] = "Tambah Data Petugas";
        $data['data_officer'] =  

        $this->form_validation->set_rules('officer_id', 'officer_id', 'trim|required');
        $this->form_validation->set_rules('officer_name', 'officer_name', 'trim|required');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required');
        $this->form_validation->set_rules('gender', 'gender', 'trim|required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('officer/add', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "officer_id"           => $this->input-> post('officer_id'),
                "officer_name"          => $this->input-> post('officer_name'),
                "phone" => $this->input-> post('phone'),
                "gender"         => $this->input-> post('gender'),
                "KEY"           => "ulbi123"
            ];

            $insert = $this->officer_model->save($data);
            if($insert['response_code'] === 201){
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('officer');
            } elseif ($insert['response_code'] === 400){
                $this->session->set_flashdata('message', 'Data Duplikat BOS!');
                redirect('officer');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Ditambahkan ni BOS!');
                redirect('officer');
            }
        }

    }
    
    public function edit($officer_id)
    {

        $data['title'] = "Ubah Data Petugas";
        $data['officer'] = $this->officer_model->getById($officer_id);

        $this->form_validation->set_rules('officer_id', 'officer_id', 'trim|required');
        $this->form_validation->set_rules('officer_name', 'officer_name', 'trim|required');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required');
        $this->form_validation->set_rules('gender', 'gender', 'trim|required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('officer/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "officer_id"     => $this->input-> post('officer_id'),
                "officer_name"     => $this->input-> post('officer_name'),
                "phone"        => $this->input-> post('phone'),
                "gender"       => $this->input-> post('gender'),
                "KEY"               => "ulbi123"
            ];

            $update = $this->officer_model->update($data);
            if($update['response_code'] === 201){
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
                redirect('officer');
            } elseif ($update['response_code'] === 400){
                $this->session->set_flashdata('message', 'Data gagal Diubah');
                redirect('officer');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Diubah ni BOS!');
                redirect('officer');
            }
        }

    }

    public function delete($officer_id)
    {
        $update = $this->officer_model->delete($officer_id);
            if($update['response_code'] === 200){
                $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
                redirect('officer');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Dihapus ni BOS!');
                redirect('officer');
            }
    }
}