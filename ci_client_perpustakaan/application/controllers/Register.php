<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Register_model');
      $this->load->model('Genereted_model');
      $this->load->library('form_validation');
   }
   public function index()
   {
      $data['title'] = "Form Registrasi";
      $this->form_validation->set_rules('username', 'username', 'trim|required');
      $this->form_validation->set_rules('password', 'password', 'trim|required');
      $this->form_validation->set_rules('no_hp', 'No Hp', 'trim|required|numeric');

      if($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('auth/register', $data);
         $this->load->view('templates/footer', $data);
      } else {
         $data = [
            
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'no_hp' => $this->input->post('no_hp'),
            'KEY' => "ulbi123"
         ];

         $insert = $this->Register_model->save($data);
         if($insert['response_code'] === 201){
            $this->session->set_flashdata('berhasil','Berhasil Sudah Register ! Generated API dulu ya');
            $this->genereteapikey($insert['ID']);
         } elseif ($insert['response_code'] === 400 ){
            $this->session->set_flashdata('message','Username Atau Password Sudah Di Pakai!');
            redirect('register');
         }else {
            $this->session->set_flashdata('message','Gagal Register!');
            redirect('register');
         }
   }
   }

   public function genereteapikey($newId) {
      $KEYS['KEYS'] = '';
      $KEYS['newId'] = $newId;
      $this->load->view('generetedkey/index', $KEYS);
   }

  public function generetekey() {
		$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charsLen = strlen($chars);
		$keyLen = 7;
		$KEYS['KEYS'] = '';
		for ($i = 0;$i < $keyLen; $i++) {
			$KEYS['KEYS'] .= $chars[rand(0, $charsLen - 1)];
		}
		$data = [
			'user_id' => $this->input->post('user_id'),
			'key' => $KEYS['KEYS']
		];
		$this->Genereted_model->saveKey($data);
		$KEYS['newId'] = $this->input->post('user_id');

		$this->load->view('generetedkey/index', $KEYS);
	}
}


