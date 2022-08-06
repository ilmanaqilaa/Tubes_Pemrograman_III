<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class Rack_model extends CI_Model {

    private $_guzzle;

    public function __construct()
    {
        parent::__construct();
        $this->_guzzle = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost/tubes/ci_rest_perpustakaan_tubes/index.php/libraries-api/rack/rack',
            // You can set any number of default request options.
            'auth'  => ['ulbi', 'pemrograman3'],
        ]);
    }

    public function getAll()
    {
        // Send a GET request to /get?foo=bar
        $response = $this->_guzzle->request('GET', '', [
            'query' => [
                'KEY' => 'ulbi123'
                ]
            ]);

            $result = json_decode($response->getBody()->getContents(), TRUE);

            return $result['data'];
    }

    public function getById($rack_id)
    {
        // Send a GET request to /get?foo=bar
        $response = $this->_guzzle->request('GET', '', [
            'query' => [
                'KEY' => 'ulbi123',
                'rack_id' => $rack_id
                ]
            ]);

            $result = json_decode($response->getBody()->getContents(), TRUE);

            return $result['data'];
    }

    public function save($data)
    {
        // Send a GET request to /get?foo=bar
        $response = $this->_guzzle->request('POST', '', [
            'http_errors' => false,
            'form_params' => $data
            ]);

            $result = json_decode($response->getBody()->getContents(), TRUE);

            return $result;
    }

    public function update($data)
    {
        // Send a GET request to /get?foo=bar
        $response = $this->_guzzle->request('PUT', '', [
            'http_errors' => false,
            'form_params' => $data
            ]);

            $result = json_decode($response->getBody()->getContents(), TRUE);

            return $result;
    }

    public function delete($rack_id)
    {
        // Send a GET request to /get?foo=bar
        $response = $this->_guzzle->request('DELETE', '', [
            'form_params' => [

                'http_errors' => false,
                'KEY'         => 'ulbi123',
                'rack_id'         => $rack_id

            ]
            ]);

            $result = json_decode($response->getBody()->getContents(), TRUE);

            return $result;
    }
}