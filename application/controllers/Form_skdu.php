<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_skdu extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('form_skdu_model');
	} 
	public function data_user($nik){
		$data = array('title' => 'Sistem Pelayanan Publik',
                        'Isi' => 'pelayan',
                        'data_is' => '1');
		$data['data_user'] = $this->form_skdu_model->data_user($nik);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('headeruser',$data);
		$this->load->view('navuser',$data);
		$this->load->view('form_skdu',$data);
	}
	
}
