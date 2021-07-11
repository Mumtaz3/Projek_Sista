<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
	{
		$this->load->view('include/menu');
		$this->load->view('include/header');
		$this->load->view('include/konten_header');
		$this->load->view('include/konten_footer');
		$this->load->view('include/footer');
		/*$this->load->view('template');*/
	}
	

}
