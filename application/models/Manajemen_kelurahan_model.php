<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Manajemen_kelurahan_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getdata($key,$tb){
	$this->db->where('id_instansi',$key);
	$query = $this->db->get($tb);
	return $query->result_array();
	}

	public function editdata($key,$tb,$data){
	$this->db->where('id_instansi',$key);
	$query = $this->db->update($tb,$data);
	}

	public function deletedata($key,$tb){
	$this->db->where('id_instansi',$key);
	$query = $this->db->delete($tb);
	}

	public function tampil(){
	$this->db->from('instansi');
	$query = $this->db->get();
	return $query->result_array();
	}

	public function tambah($data){
		$this->db->insert('instansi',$data);
	}

	public function edit ($data){
		$this->db->where('id_instansi',$data['id_instansi']);
		$this->db->update('instansi',$data);
	}

	public function delete($data){
		$this->db->where('id_instansi',$data['id_instansi']);
		$this->db->delete('instansi',$data);
	}
}