<?php 

defined('BASEPATH') or exit('No  direct script access allowed');

// import library
require APPPATH . 'libraries/Format.php';
require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Borrower extends RestController{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('borrower_model');
    }

    public function bor_get()
    {
        $borrower_id = $this->get('borrower_id');
        $data = $this->borrower_model->getDataborrower($borrower_id);
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

    function bor_post()
    {
        $data = array(
            'borrower_id' => $this->post('borrower_id'),
            'name' => $this->post('name'),
            'gender' => $this->post('gender'),
            'phone' => $this->post('phone'),
            'address' => $this->post('address'),
            'study_program' => $this->post('study_program'),
            'class' => $this->post('class'),
        );
        
        $cek_data = $this->borrower_model->getDataborrower($this->post('borrower_id'));

        //Jika semua data wajib diisi
        if (
            $data['borrower_id'] == NULL ||
            $data['name'] == NULL ||
            $data['gender'] == NULL ||
            $data['phone'] == NULL || 
            $data['address'] == NULL ||
            $data['study_program'] == NULL ||
            $data['class'] == NULL) {
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
        } elseif ($this->borrower_model->insertborrower($data) > 0) {
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

    function bor_put()
    {
        $borrower_id = $this->put('borrower_id');
        $data = array(
            'name' => $this->put('name'),
            'gender' => $this->put('gender'),
            'phone' => $this->put('phone'),
            'address' => $this->put('address'),
            'study_program' => $this->put('study_program'),
            'class' => $this->put('class'),
        );
        //Jika field borrower_id tidak diisi
        if ($borrower_id == NULL) {
            $this->response(
                [
                    'status' => $borrower_id,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'borrower_id Tidak Boleh Kosong',
                ],
                RestController::HTTP_BAD_REQUEST
                );
        //Jika data berhasil berubah
        } elseif ($this->borrower_model->updateborrower($data, $borrower_id) > 0) {
        $this->response(                    
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_CREATED,
                    'message' => 'Data borrower Dengan borrower_id '.$borrower_id.' Berhasil Diubah',
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
        
        function bor_delete()
        {
        $borrower_id = $this->delete('borrower_id');

        //Jika field borrower_id tidak diisi
        if ($borrower_id == NULL) {
            $this->response(
            [
                'status' => $borrower_id,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'borrower_id Tidak Boleh Kosong',
            ],
            RestController::HTTP_BAD_REQUEST
        );

        //Kondisi ketika OK
        } elseif ($this->borrower_model->deleteborrower($borrower_id) > 0) {
            $this->response(
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_OK,    
                    'message' => 'Data borrower Dengan borrower_id '.$borrower_id.' Berhasil Dihapus',
                ],
                RestController::HTTP_OK
                );
                //Kondisi gagal
                } else {
                $this->response(
                [
                'status' => false,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'Data borrower Dengan borrower_id '.$borrower_id.' Tidak
                Ditemukan',
                ],
                RestController::HTTP_BAD_REQUEST
                );
                }
                }
                
}

?>