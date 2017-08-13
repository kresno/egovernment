<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Imb_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function index(){
		$this->db->from('simb');
		$query = $this->db->get();
		return $query->result_array();
	}

	function ambil_data($tbl,$data){
        return $this->db->get_where($tbl,$data);
	}
	
	public function getdata($key,$tb){
		$this->db->where('id_simb',$key);
		$query = $this->db->get($tb);
		return $query->result_array();
	}

	public function tambah_data($data,$tb){
		$this->db->insert($tb,$data);
	}

	public function error_log($key){
		$this->db->from('simb');
		$this->db->where('id_simb',$nik);
		$query=$this->db->get();
		return $query->row();
	}

	public function lihat($key,$tb){
		$this->db->where('id_simb',$key);
		$query = $this->db->get($tb);
		return $query->result_array();
	}

	public function deletedata($key,$tb){
		$this->db->where('id_simb',$key);
		$query = $this->db->delete($tb);
	}
	
	public function editdata($key,$tb,$data){
		$this->db->where('id_simb',$key);
		$query = $this->db->update($tb,$data);
	}
}