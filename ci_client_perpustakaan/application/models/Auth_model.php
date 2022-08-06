<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class BookType_model extends CI_Model {

    private $_guzzle;

    public function __construct()
    {
        parent::__construct();
        $this->_guzzle = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost/tubes/ci_rest_perpustakaan_tubes/libraries-api/auth/auth',
            // You can set any number of default request options.
        ]);
    }

    public function getById($book_type_id)
    {
        // Send a GET request to /get?foo=bar
        $response = $this->_guzzle->request('GET', '', [
            'query' => [
                'KEY' => 'ulbi123',
                'book_type_id' => $book_type_id
                ]
            ]);

            $result = json_decode($response->getBody()->getContents(), TRUE);

            return $result['data'];
    }
    
}