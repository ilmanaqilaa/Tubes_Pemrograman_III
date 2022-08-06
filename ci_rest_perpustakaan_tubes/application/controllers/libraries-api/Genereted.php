<?php 

defined('BASEPATH') or exit('No  direct script access allowed');

// import library
require APPPATH . 'libraries/Format.php';
require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Genereted extends RestController{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Genereted_model');
    }
    public function savekey_post() {
        $data = [
            'user_id' => $this->post('user_id'),
            'key' => $this->post('key')
        ];

        $keySaved = $this->Genereted_model->saveKey($data);
        if ($keySaved > 0){
            $this->response(
                [
                    'data'  => true,
                    'status' => 'API Key Tersimpan',
                    'response_code' => RestController::HTTP_OK
                ],
                RestController::HTTP_OK
            );
        } else {
            $this->response(
                [
                    'data' => '',
                    'status' => 'API key Gagal disimpan',
                    'response_code' => RestController::HTTP_NOT_FOUND
                ],
                RestController::HTTP_NOT_FOUND
            );
        }
    }
} 