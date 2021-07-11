<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftarSeminar extends CI_Controller {

    public function index(){
        $this->load->view('daftarseminar/index');
    }
}