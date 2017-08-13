<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Skdu_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function index(){
		$this->db->from('skdu');
		$query = $this->db->get();
		return $query->result_array();
	}

    function ambil_data($tbl,$data){
        return $this->db->get_where($tbl,$data);
	}
  
	
	public function getdata($key,$tb){
		$this->db->where('id_skdu',$key);
		$query = $this->db->get($tb);
		return $query->result_array();
	}

	public function tambah_data($data,$tb){
		$this->db->insert($tb,$data);
	}

	public function error_log($key){
		$this->db->from('skdu');
		$this->db->where('id_skdu',$nik);
		$query=$this->db->get();
		return $query->row();
	}

	public function lihat($key){
		$this->db->where('id_skdu',$key);
		$query = $this->db->get('skdu');
		return $query->result_array();
	}

	public function deletedata($key,$tb){
		$this->db->where('id_skdu',$key);
		$query = $this->db->delete($tb);
	}
	
	public function editdata($key,$tb,$data){
		$this->db->where('id_skdu',$key);
		$query = $this->db->update($tb,$data);
	}
    
    public function cetak($id){
        $this->db->where('id_skdu',$id);
		$query = $this->db->get('skdu');
		return $query->result_array();
    }
    
    public function test($id){
        $this->db->select('*');
        $this->db->from('skdu s');
        $this->db->join('data_penduduk d', 'd.nik= s.nik', 'left');
        $this->db->where('id_skdu', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
}