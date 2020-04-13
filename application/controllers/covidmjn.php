<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Covidmjn extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data covidmjn
    function index_get()
    {
        $id = $this->get('id');
        if ($id == '') {
            $covidmjn = $this->db->get('data')->result();
        } else {
            $this->db->where('id', $id);
            $covidmjn = $this->db->get('data')->result();
        }
        $this->response($covidmjn, 200);
    }

    //Masukan function selanjutnya disini
}
