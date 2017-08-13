<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Instansi_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Listing
	public function Listing(){
		$this->db->select('instansi.*,instansi.id_instansi');
		$this->db->from("instansi");
		//relasi
		$this->db->join('instansi','instansi.id_instansi=instansis.id_instansi','LEFT');
		$this->db->order_by('id_instansi'.'DESC');
		$query=$this->db->get();
		return $query-.result();


	}

	public function detail($id_instansis){
		$query= $this->db->get_where('instansi',array('id_instansi'=>$id_instansis));
		return $query->row();
	}
 	public function tambah($data){
 		$this->db->insert('instansi',$data);
 	}
 	public function edit($data){
 		$this->db->where('id_instansi',$data[' id_instansi']);
 		$this->db->update('instansi',$data);
 	}
 	public function delete($data){
 		$this->db->where('id_instansi',$data['id_instansi']);
 		$this->db->delete('instansi',$data);
 	}

}