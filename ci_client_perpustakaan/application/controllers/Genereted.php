<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genereted extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('Genereted_model'); // load model borrower
        $this->load->library('Form_validation'); // load form GenerertedKey
        $this->load->library('session');
    }

    public function index()
    {

        $data['title'] = "Generated API Key";

        $this->load->view('templates/header', $data);
        $this->load->view('generetedkey/index', );

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
		$saveKey = $this->Genereted_model->saveKey($data);
		$KEYS['newId'] = $this->input->post('user_id');

		$this->load->view('generateapikey', $KEYS);
	}
}