<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Sku_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function tambah_data($data,$tb){
		$this->db->insert($tb,$data);
	}
    
    function ambil_data($tbl,$data){
        return $this->db->get_where($tbl,$data);
	}
    
	public function getdata($key,$tb){
		$this->db->where('id_skus',$key);
		$query = $this->db->get($tb);
		return $query->result_array();
	}
	public function data_user($tb){

		$data=$this->db->get($tb);
		return $data->result_array();
	}
	public function editdata($key,$tb,$data){
		$this->db->where('id_skus',$key);
		$this->db->update($tb,$data);
	}
	public function lihat($key,$tb){
		$this->db->where('id_skus',$key);
		$query = $this->db->get($tb);
		return $query->result_array();
	}

	public function deletedata($key,$tb){
		$this->db->where('id_skus',$key);
		$query = $this->db->delete($tb);
        
	}
}