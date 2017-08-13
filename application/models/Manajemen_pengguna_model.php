<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_pengguna_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getdata($key,$tb){
		$this->db->where('username',$key);
		$query = $this->db->get($tb);
		return $query->result_array();
	}

	public function tampil(){
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function tambah($data){
		$this->db->insert('user',$data);
	}

	public function editdata($key,$tb,$data){
		$this->db->where('username',$key);
		$query = $this->db->update($tb,$data);
	}

	public function deletedata($key,$tb){
		$this->db->where('username',$key);
		$query = $this->db->delete($tb);
	}
}