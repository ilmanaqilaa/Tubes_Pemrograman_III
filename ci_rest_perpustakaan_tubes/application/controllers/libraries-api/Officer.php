<?php 

defined('BASEPATH') or exit('No  direct script access allowed');

// import library
require APPPATH . 'libraries/Format.php';
require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Officer extends RestController{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('officer_model');
    }

    public function officer_get()
    {
        $officer_id = $this->get('officer_id');
        $data = $this->officer_model->getDataofficer($officer_id);
        // Jika variable data terdapat data didalamnya
        if($data){
            $this->response(
                [
                    'data'          => $data,
                    'status'        => 'success',
                    'response_code'   => RestController::HTTP_OK
                ],
                RestController::HTTP_OK
            );
            //jika data tidak ada
        }else {
            $this->response(
                [
                    'status'        => false,
                    'message'       => 'Data Tidak Ada',
                    'response_code' => RestController::HTTP_NOT_FOUND
                ],
                RestController::HTTP_NOT_FOUND
            );
        }
    }

    function officer_post()
    {
        $data = array(
            'officer_id' => $this->post('officer_id'),
            'officer_name' => $this->post('officer_name'),
            'phone' => $this->post('phone'),
            'gender' => $this->post('gender')
        );
        
        $cek_data = $this->officer_model->getDataofficer($this->post('officer_id'));

        //Jika semua data wajib diisi
        if (
            $data['officer_id'] == NULL ||
            $data['officer_name'] == NULL ||
            $data['phone'] == NULL || 
            $data['gender'] == NULL) {
        $this->response(
        [
            'status' => false,
            'response_code' => RestController::HTTP_BAD_REQUEST,
            'message' => 'Data Yang Dikirim Tidak Boleh Ada Yang Kosong',
        ],
        RestController::HTTP_BAD_REQUEST

        );
        
        //Jika data duplikat
        } else if ($cek_data) {
        $this->response(
            [
                'status' => false,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'Data Duplikat',
            ],
            RestController::HTTP_BAD_REQUEST
        );
        //Jika data tersimpan
        } elseif ($this->officer_model->insertofficer($data) > 0) {
            $this->response(
            [
                'status' => true,
                'response_code' => RestController::HTTP_CREATED,
                'message' => 'Data Berhasil Ditambahkan',
            ],
            RestController::HTTP_CREATED
            );
        } else {
            $this->response(
            [
                'status' => false,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'Gagal Menambahkan Data',
            ],
            RestController::HTTP_BAD_REQUEST
            );
        }
    }

    function officer_put()
    {
        $officer_id = $this->put('officer_id');
        $data = array(
            'officer_name' => $this->put('officer_name'),
            'phone' => $this->put('phone'),
            'gender' => $this->put('gender')
        );
        //Jika field officer_id tidak diisi
        if ($officer_id == NULL) {
            $this->response(
                [
                    'status' => $officer_id,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'officer_id Tidak Boleh Kosong',
                ],
                RestController::HTTP_BAD_REQUEST
                );
        //Jika data berhasil berubah
        } elseif ($this->officer_model->updateofficer($data, $officer_id) > 0) {
        $this->response(                    
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_CREATED,
                    'message' => 'Data officer Dengan officer_id '.$officer_id.' Berhasil Diubah',
                ],
                RestController::HTTP_CREATED
                );
        } else {
                $this->response(
                [
                    'status' => false,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'Gagal Mengubah Data',
                ],
                RestController::HTTP_BAD_REQUEST
                );
                }
        }
        
        function officer_delete()
        {
        $officer_id = $this->delete('officer_id');

        //Jika field officer_id tidak diisi
        if ($officer_id == NULL) {
            $this->response(
            [
                'status' => $officer_id,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'officer_id Tidak Boleh Kosong',
            ],
            RestController::HTTP_BAD_REQUEST
        );

        //Kondisi ketika OK
        } elseif ($this->officer_model->deleteofficer($officer_id) > 0) {
            $this->response(
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_OK,    
                    'message' => 'Data officer Dengan officer_id '.$officer_id.' Berhasil Dihapus',
                ],
                RestController::HTTP_OK
                );
                //Kondisi gagal
                } else {
                $this->response(
                [
                'status' => false,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'Data officer Dengan officer_id '.$officer_id.' Tidak
                Ditemukan',
                ],
                RestController::HTTP_BAD_REQUEST
                );
                }
                }
                
}

?>