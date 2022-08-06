<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borrower extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('borrower_model'); // load model borrower
        $this->load->library('Form_validation'); // load form borrower
        
    }

    public function index()
    {

        $data['title'] = "List Data Peminjam";
        $data['borrower'] = $this->borrower_model->getALL();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('borrower/index',$data);
        $this->load->view('templates/footer');
    }

    public function detail($borrower_id)
    {

        $data['title'] = "Detail Data Peminjam";
        $data['borrower'] = $this->borrower_model->getById($borrower_id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu.php');
        $this->load->view('borrower/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data['title'] = "Tambah Data Peminjam";
        $data['data_borrower'] =  

        $this->form_validation->set_rules('borrower_id', 'borrower_id', 'trim|required');
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('gender', 'gender', 'trim|required');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required');
        $this->form_validation->set_rules('address', 'address', 'trim|required');
        $this->form_validation->set_rules('study_program', 'study_program', 'trim|required');
        $this->form_validation->set_rules('class', 'class', 'trim|required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('borrower/add', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "borrower_id"           => $this->input-> post('borrower_id'),
                "name"          => $this->input-> post('name'),
                "gender" => $this->input-> post('gender'),
                "phone"         => $this->input-> post('phone'),
                "address"         => $this->input-> post('address'),
                "study_program"         => $this->input-> post('study_program'),
                "class"         => $this->input-> post('class'),
                "KEY"           => "ulbi123"
            ];

            $insert = $this->borrower_model->save($data);
            if($insert['response_code'] === 201){
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('borrower');
            } elseif ($insert['response_code'] === 400){
                $this->session->set_flashdata('message', 'Data Duplikat BOS!');
                redirect('borrower');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Ditambahkan ni BOS!');
                redirect('borrower');
            }
        }

    }
    
    public function edit($borrower_id)
    {

        $data['title'] = "Ubah Data Peminjam";
        $data['borrower'] = $this->borrower_model->getById($borrower_id);

        $this->form_validation->set_rules('borrower_id', 'borrower_id', 'trim|required');
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('gender', 'gender', 'trim|required');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required');
        $this->form_validation->set_rules('address', 'address', 'trim|required');
        $this->form_validation->set_rules('study_program', 'study_program', 'trim|required');
        $this->form_validation->set_rules('class', 'class', 'trim|required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('borrower/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "borrower_id"     => $this->input-> post('borrower_id'),
                "name"     => $this->input-> post('name'),
                "gender"        => $this->input-> post('gender'),
                "phone"       => $this->input-> post('phone'),
                "address"            => $this->input-> post('address'),
                "study_program"            => $this->input-> post('study_program'),
                "class"            => $this->input-> post('class'),
                "KEY"               => "ulbi123"
            ];

            $update = $this->borrower_model->update($data);
            if($update['response_code'] === 201){
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
                redirect('borrower');
            } elseif ($update['response_code'] === 400){
                $this->session->set_flashdata('message', 'Data gagal Diubah');
                redirect('borrower');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Diubah ni BOS!');
                redirect('borrower');
            }
        }

    }

    public function delete($borrower_id)
    {
        $update = $this->borrower_model->delete($borrower_id);
            if($update['response_code'] === 200){
                $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
                redirect('borrower');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Dihapus ni BOS!');
                redirect('borrower');
            }
    }
}