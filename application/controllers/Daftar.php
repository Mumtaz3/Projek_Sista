<?php


class Daftar extends CI_Controller{


    public function __construct(){
        parent::__construct();
        $this->load->model('daftar_model');
    }

    public function index(){
        $this->load->view('Daftar/index');
    }

	public function edit($id){
		$this->load->model('daftar_model');
		$data['user'] = $this->daftar_model->findById($id);
		$this->load->view('pesertaseminar/edit',$data);
	}

    public function add(){
        $data['nim'] = $this->input->post('nim');
		$data['nama'] = $this->input->post('nama');
        $data['kehadiran'] = $this->input->post('kehadiran');
        $data['seminar_id'] = $this->input->post('seminar_id');

        return redirect('daftarseminar/index');
    }
    public function daftar_seminar()
	{
		$id = $this->uri->segment('3');
		$result = $this->daftar_model->findById($id);
		if ($result->num_rows()> 0)
		{
			$i = $result->row_array();
			$data = array 
			(
			'id' => $i['id'],
			'kehadiran' => $i['kehadiran'],
			'nim' => $i['nim'],
			'nama_mahasiswa' => $i['nama_mahasiswa'],
			'seminar_id' => $i['seminar_id'],
			);
			$this->load->view('pesertaseminar/index', $data);
        }
    }
    public function delete($where,$table){

        //delete from pasien where id = id
        $this->db->where($where);
        $this->db->delete($table);
    }
    //add data
    public function save(){
	
		$data['semester'] =$this->input->post('semester');
        $data['tanggal'] =$this->input->post('tanggal');
		$data['jam'] =$this->input->post('jam');
		$data['kategori_seminar_id'] =$this->input->post('kategori_seminar_id');
		$data['nim'] =$this->input->post('nim');
		$data['nama_mahasiswa'] =$this->input->post('nama_mahasiswa');
		$data['judul'] =$this->input->post('judul');
        $data['pembimbing_id'] =$this->input->post('pembimbing_id');
        $data['penguji1_id'] =$this->input->post('penguji1_id');
        $data['penguji2_id'] =$this->input->post('penguji2_id');
		$data['nilai_pembimbing'] =$this->input->post('nilai_pembimbing');
		$data['nilai_penguji1'] =$this->input->post('nilai_penguji1');
		$data['nilai_penguji2'] =$this->input->post('nilai_penguji2');
        $data['lokasi'] =$this->input->post('lokasi');
		$data['nilai_akhir'] =$this->input->post('nilai_akhir');
		
		$this->db->insert('seminar_ta', $data);
		
		redirect('pesertaseminar/index');
	}

	public function save_peserta(){
		$seminar_id = $this->input->post('seminar_id');
		$data['nim'] =$this->input->post('nim');
		$data['nama'] =$this->input->post('nama_mahasiswa');
		$data['seminar_id'] = $seminar_id;
		$data['kehadiran'] =$this->input->post('kehadiran');
		
		$this->db->insert('peserta_seminar', $data);
		
		$result = $this->daftar_model->findById($seminar_id);
		if ($result->num_rows()> 0)
		{
			$i = $result->row_array();
			$data['id'] =  $i['id'];
			$data['tanggal'] =  $i['tanggal'];
			$data['jam'] =  $i['jam'];
			$data['nim_seminar'] =  $i['nim'];
			$data['nama_mahasiswa'] =  $i['nama_mahasiswa'];
			$data['judul'] =  $i['judul'];
			$data['kategori_seminar_id'] =  $i['kategori_seminar_id'];

			$this->load->view('pesertaseminar/index', $data);
		}
		else
		{
			echo "data was not Found";
		}
	}

    //edit data
   
    public function update($data,$id){
       
        //$this->db->update('nama_tabel',data,array_id)

        $this->db->update('peserta_seminar',$data,array('id'=>$id));
    }
}
