<?php

class Daftar_model extends CI_Model{
    

    public $nim;
    public $nama;
    public $prodi;
    public $kehadiran;
    Public $seminar_id;

    
    public function findById($id){
        //select * from pasien where id = $id
        
        //$this->db->get_where('nama_tabel',array id)
        return $this->db->get_where('peserta_seminar', ["id" => $id])->row();
    }
    public function getAll(){
        //select * from pasien

        //this->db->get('nama_tabel')
        $query = $this->db->get('peserta_seminar');
        return $query;

    }
    public function daftar($table,$where){
        return $this->db->insert($table,$where);
    }
}