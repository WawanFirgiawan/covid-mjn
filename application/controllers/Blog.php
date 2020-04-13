<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Blog extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        //load model web
        $this->load->model('web');
    }

    public function index()
    {
        //get data dari model
        $blog = $this->web->get_blog();
        //masukkan data kedalam variabel
        $data['blog'] = $blog;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($blog as $hasil) {
            $posts[] = array(
                "odp"            =>  $hasil->odp_blog,
                "pdp"         =>  $hasil->pdp_blog,
                "positif"       =>  $hasil->positif_blog,
            );
        }
        $response['blog'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response, TRUE);
    }
}
