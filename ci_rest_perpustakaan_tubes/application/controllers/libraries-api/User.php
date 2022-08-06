<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

use chriskacerguis\RestServer\RestController;

class User extends RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }
 
//fungsi CRUD (GET, POST, PUT, DELETE) simpan di bawah sini
public function register_get()
{
    $username = $this->get('username');
    $data = $this->User_model->getDataUser($username);
    //jika variabel $data terdapat data didalamnya 
    if ($data) {
        $this->response(
            [
                'data' => $data,
                'status' => 'success',
                'response_code' => RestController::HTTP_OK
            ],
            RestController::HTTP_OK
        );
        //jika data tidak ada
    } else {
        $this->response(
            [
                'status' => false,
                'message' => 'Data Tidak Ada',
                'response_code' => RestController::HTTP_NOT_FOUND
            ],
            RestController::HTTP_OK
        );
    }
}

public function login_post()
{
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if ( isset ($_POST['username']) && isset ($_POST['password'])) {

            $user_login = $this->User_model->loginYa($_POST['username'],$_POST['password']);
            $result['user_id'] = null;

            if($user_login->num_rows() == true ) {
                $result['value'] = "1";
                $result['pesan'] = "berhasil login!";
                $result['user_id'] = $user_login->row()->user_id;
            } else {
                $result['value'] = "2";
                $result['pesan'] = "Username Dan Password Salah!";
            }
        } else {
            $result['value'] = "3";
            $result['pesan'] = "Ada Yang Kosong!";
        }
    }else {
        $result['value'] = "Invalid";
        $result['pesan'] = "Invalid Request Method!";
    }
    echo json_encode($result);

} 

public function register_post()
{
    $data = array(
        'user_id' => $this->post('user_id'),
        'username' => $this->post('username'),
        'password' => $this->post('password'),
        'no_hp' => $this->post('no_hp')
    );
     
    $cek_data = '';
    if($data['username'] != NULL) {
        $cek_data = $this->User_model->getDataUserRegis($this->post('username'));
    } elseif ($data['no_hp'] != NULL) {
        $cek_data = $this->User_model->getDataUserRegis($this->post('no_hp'));
    } elseif ($data['username'] != NULL) {
        $cek_data = $this->User_model->getDataUserRegis($this->post('user_id'));
    }

    $insertID = $this->User_model->insertUser($data);

    //Jika semua data wajib diisi
    if (
        $data['username'] == NULL ||
        $data['password'] == NULL || 
        $data['no_hp'] == NULL 
    ) {

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
    }   
    elseif ($insertID != '') {
        $this->response(
            [
                'status' => true,
                'ID' => $insertID,
                'response_code' => RestController::HTTP_CREATED,
                'message' => 'Data Berhasil Ditambahkan'
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
}  
?>