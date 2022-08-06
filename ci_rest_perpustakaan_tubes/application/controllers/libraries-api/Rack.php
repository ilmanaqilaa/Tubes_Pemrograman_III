<?php 

defined('BASEPATH') or exit('No  direct script access allowed');

// import library
require APPPATH . 'libraries/Format.php';
require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Rack extends RestController{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rack_model');
    }

    public function rack_get()
    {
        $rack_id = $this->get('rack_id');
        $data = $this->rack_model->getDatarack($rack_id);
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

    function rack_post()
    {
        $data = array(
            'rack_id' => $this->post('rack_id'),
            'rack_name' => $this->post('rack_name'),
            'column' => $this->post('column')
        );
        
        $cek_data = $this->rack_model->getDatarack($this->post('rack_id'));

        //Jika semua data wajib diisi
        if (
            $data['rack_id'] == NULL ||
            $data['rack_name'] == NULL || 
            $data['column'] == NULL) {
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
        } elseif ($this->rack_model->insertrack($data) > 0) {
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

    function rack_put()
    {
        $rack_id = $this->put('rack_id');
        $data = array(
            'rack_name' => $this->put('rack_name'),
            'column' => $this->put('column')
        );
        //Jika field rack_id tidak diisi
        if ($rack_id == NULL) {
            $this->response(
                [
                    'status' => $rack_id,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'rack_id Tidak Boleh Kosong',
                ],
                RestController::HTTP_BAD_REQUEST
                );
        //Jika data berhasil berubah
        } elseif ($this->rack_model->updaterack($data, $rack_id) > 0) {
        $this->response(                    
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_CREATED,
                    'message' => 'Data rack Dengan rack_id '.$rack_id.' Berhasil Diubah',
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
        
        function rack_delete()
        {
        $rack_id = $this->delete('rack_id');

        //Jika field rack_id tidak diisi
        if ($rack_id == NULL) {
            $this->response(
            [
                'status' => $rack_id,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'rack_id Tidak Boleh Kosong',
            ],
            RestController::HTTP_BAD_REQUEST
        );

        //Kondisi ketika OK
        } elseif ($this->rack_model->deleterack($rack_id) > 0) {
            $this->response(
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_OK,    
                    'message' => 'Data rack Dengan rack_id '.$rack_id.' Berhasil Dihapus',
                ],
                RestController::HTTP_OK
                );
                //Kondisi gagal
                } else {
                $this->response(
                [
                'status' => false,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'Data rack Dengan rack_id '.$rack_id.' Tidak
                Ditemukan',
                ],
                RestController::HTTP_BAD_REQUEST
                );
                }
                }
                
}

?>