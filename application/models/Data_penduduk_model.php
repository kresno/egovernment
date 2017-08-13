<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Data_penduduk_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getdata($key,$tb){
	$this->db->where('nik',$key);
	$query = $this->db->get($tb);
	return $query->result_array();
	}
	public function editdata($key,$tb,$data){
	$this->db->where('nik',$key);
	$query = $this->db->update($tb,$data);
	}
	public function deletedata($key,$tb){
	$this->db->where('nik',$key);
	$query = $this->db->delete($tb);
	}
	
	public function tampil(){
	$this->db->from('data_penduduk');
	$query = $this->db->get();
	return $query->result_array();
	}

	function get_user_by_id($id) {
        $this->db->from('data_penduduk');
        $this->db->where('nik', $id);
 
        $query = $this->db->get();
 
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }

	public function tambah($data){
		$this->db->insert('data_penduduk',$data);
		
	}
}