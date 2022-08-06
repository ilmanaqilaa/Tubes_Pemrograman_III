<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('transaction_model'); // load model transaction
        $this->load->library('Form_validation'); // load form transaction
        $this->load->model('book_model'); // load form buku
        
    }

    public function index()
    {

        $data['title'] = "List Data Transaksi";
        $data['transaction'] = $this->transaction_model->getALL();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('transaction/index',$data);
        $this->load->view('templates/footer');
    }

    public function detail($transaction_id)
    {
        $data['title'] = "Detail Data Peminjaman";
        $data['transaction'] = $this->transaction_model->getById($transaction_id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu.php');
        $this->load->view('transaction/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data['title'] = "Tambah Data Transaksi";
        $data['transaction'] = $this->transaction_model->getAll();
        // $data['data_peminjam'] = $this->peminjam_model->getAll();
        // $data['data_buku'] = $this->buku_model->getAll();

        $this->form_validation->set_rules('transaction_id', 'transaction_id', 'trim|required');
        $this->form_validation->set_rules('book_id', 'book_id', 'trim|required');
        $this->form_validation->set_rules('officer_id', 'officer_id', 'trim|required');
        $this->form_validation->set_rules('borrower_id', 'borrower_id', 'trim|required');
        $this->form_validation->set_rules('borrow_date', 'borrow_date', 'trim|required');
        $this->form_validation->set_rules('return_date', 'return_date', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('transaction/add', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "transaction_id"           => $this->input-> post('transaction_id'),
                "book_id"          => $this->input-> post('book_id'),
                "officer_id" => $this->input-> post('officer_id'),
                "borrower_id"        => $this->input-> post('borrower_id'),
                "borrow_date"         => $this->input-> post('borrow_date'),
                "return_date"         => $this->input-> post('return_date'),
                "status"         => $this->input-> post('status'),
                "KEY"           => "ulbi123"
            ];

            $insert = $this->transaction_model->save($data);
            if($insert['response_code'] === 201){
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('transaction');
            } elseif ($insert['response_code'] === 400){
                $this->session->set_flashdata('message', 'Data Duplikat BOS!');
                redirect('transaction');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Ditambahkan ni BOS!');
                redirect('transaction');
            }
        }

    }
    
    public function edit($transaction_id)
    {

        $data['title'] = "Ubah Data Transaksi";
        $data['transaction'] = $this->transaction_model->getById($transaction_id);
        // $data['data_peminjam'] = $this->peminjam_model->getAll();
        // $data['data_buku'] = $this->buku_model->getAll();

        $this->form_validation->set_rules('transaction_id', 'transaction_id', 'trim|required');
        $this->form_validation->set_rules('book_id', 'book_id', 'trim|required');
        $this->form_validation->set_rules('officer_id', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('borrower_id', 'borrower_id', 'trim|required');
        $this->form_validation->set_rules('borrow_date', 'borrow_date', 'trim|required');
        $this->form_validation->set_rules('return_date', 'No HP', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('transaction/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                "transaction_id"     => $this->input-> post('transaction_id'),
                "book_id"     => $this->input-> post('book_id'),
                "officer_id"        => $this->input-> post('officer_id'),
                "borrower_id"       => $this->input-> post('borrower_id'),
                "borrow_date"            => $this->input-> post('borrow_date'),
                "return_date"       => $this->input-> post('return_date'),
                "status"           => $this->input-> post('status'),
                "KEY"               => "ulbi123"
            ];

            $update = $this->transaction_model->update($data);
            if($update['response_code'] === 201){
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
                redirect('transaction');
            } elseif ($update['response_code'] === 400){
                $this->session->set_flashdata('message', 'Data gagal Diubah');
                redirect('transaction');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Diubah ni BOS!');
                redirect('transaction');
            }
        }

    }

    public function delete($transaction_id)
    {
        $update = $this->transaction_model->delete($transaction_id);
            if($update['response_code'] === 200){
                $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
                redirect('transaction');
            } else{
                $this->session->set_flashdata('message', 'Data gagal Dihapus ni BOS!');
                redirect('transaction');
            }
    }
}