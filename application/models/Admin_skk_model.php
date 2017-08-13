<?php

class Admin_skk_model extends CI_Model{

public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

public function get_data($tb){
	$data=$this->db->get($tb);
	return $data->result_array();
}
    
public function get_datas($tb){    
    $this->db->where('legalisasi_lurah', 'Y');
    $data=$this->db->get($tb);
    return $data->result_array();
}
    
public function data_user($tb,$date=false){
	if($date)
	{
		$this->db->where('tgl_daftar',$date);
	}
	$data=$this->db->get($tb);
	return $data->result_array();

}
}
?>