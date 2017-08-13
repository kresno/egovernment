<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Admin_ho_model extends CI_Model 
{
	
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
	if($date){
		$this->db->where('tgl_daftar',$date);
	}
	$data=$this->db->get($tb);
	return $data->result_array();

}
public function edit($data){
	$this->db->where('id_siho',$data[id_siho]);
	$this->db->update('siho',$data);
}
//delete
public function delete($data){
	$this->db>where('id_siho',$data['id_siho']);
	$this->db->delete('siho',$data);
}


}