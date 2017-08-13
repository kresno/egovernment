<?php

class Login_model extends CI_Model{

public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

public function getAccount($user,$pwd){
	$data = array('username' => $user,
					'password' => $pwd );
$this->db->where($data);
$this->db->from('user');
$query=$this->db->get();
	return $query->row();
}
public function add($user){
	$this->db->insert('user',$user);
}
 public function cekAccountById($username,$password){
 	$user=null;
 	$data= array(
 		'username'=>$username,
 		'password'=>$password);
 	$this->db->select('username,password,level');
 	$this->db->where($data);
 	$query=$this->db->get('user');
 
 	foreach ($query ->result() as $row) {
 		$user= array(
 			'username' =>$row->username,
 			'level'=>$row->level);
 	}
 	return $user;
 }

}
?>