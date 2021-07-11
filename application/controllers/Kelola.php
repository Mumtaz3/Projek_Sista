<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
    //menampilkan data program studi
	public function index()
	{	
		//untuk menampilkan data
		$this->load->model('kelola_model');//load model
		$data['user'] = $this->kelola_model->getAll(); //query select all data

		$this->load->view('kelola/index',$data);
	}

	public function view($id){
		
		$this->load->model('kelola_model');
		$data['user'] = $this->kelola_model->findById($id);
		$this->load->view('kelola/view',$data);

	}

	public function delete($id){
        
		//untuk menghapus data
        $this->load->model('kelola_model');//load model
		$where = array('id' => $id);
		$this->kelola_model->delete($where,'user');// query delete(delete from pasien where id = $id)
		redirect('kelola/index');
	}

	
	//add data
	public function add(){
		$this->load->library('form_validation');
		$this->load->view('kelola/tambah_user');
	}

	public function save(){
	
		$this->load->model('kelola_model');

		$str = rand();
		$result = md5($str);
		$data['id'] = $id;
		$data['username'] =$this->input->post('username');
		$data['email'] =$this->input->post('email');
		$data['nim'] =$this->input->post('nim');
		$data['foto'] = $this->kelola_model->upload_foto();//ambil fungsi upload foto dari model
		$this->kelola_model->save($data);
		redirect('kelola/index');
	}

	//edit data

	public function edit($id){
		$this->load->model('kelola_model');
		$data['user'] = $this->kelola_model->findById($id);
		$this->load->view('kelola/edit',$data);
	}

	public function update(){
	
		$this->load->model('kelola_model');
		$id = $this->input->post('id');

		$data['username'] =$this->input->post('username');
		$data['email'] =$this->input->post('email');
		
		//upload file
		if (!empty($_FILES["foto"]["name"])) {//array foto diambil dari name inputan
			$data['foto'] = $this->kelola_model->upload_foto(); //array foto dari nama column di db
		} else {
			$data['foto'] = $post["old_image"];
		}
		$this->kelola_model->update($data,$id);
		redirect('kelola/index');
	}

	}


