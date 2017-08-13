<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Skk_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	 function ambil_data($tbl,$data){
        return $this->db->get_where($tbl,$data);
	}

	public function tambah_data($data,$tb){
		$this->db->insert($tb,$data);
	}

	public function getdata($key,$tb){
		$this->db->where('id_skk',$key);
		$query = $this->db->get($tb);
		return $query->result_array();
	}

	public function error_log($nik){
		$this->db->from('data_penduduk');
		$this->db->where('nik',$nik);
		$query=$this->db->get();
		return $query->row();
	}

	public function deletedata($key,$tb){
		$this->db->where('id_skk',$key);
		$query = $this->db->delete($tb);
	}
	public function data_user($tb){

		$data=$this->db->get($tb);
		return $data->result_array();
	}
	
	public function lihat($key,$tb){
		$this->db->where('id_skk',$key);
		$query = $this->db->get($tb);
		return $query->result_array();
	}

	public function editdata($key,$tb,$data){
		$this->db->where('id_skk',$key);
		$query = $this->db->update($tb,$data);
	}
    public function cetak($key,$tb){
		$tabel='data_penduduk';
		$this->db->join($tabel.' d','d.nik=s.nik');
		$this->db->where('s.nik',$key);
		$query=$this->db->get($tb.' s');
		return $query->result_array();
	}
	

}