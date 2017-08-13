<?php

class Form_sku_model extends CI_Model{

public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

public function add($user){
	$this->db->insert('user',$user);
}
public function data_user($nik){
	$this->db->from('data_penduduk');
	$this->db->where('nik',$nik);
	$query = $this->db->get();
	return $query->result_array();
}


}
?>