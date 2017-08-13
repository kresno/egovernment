<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_skl extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->model('form_skl_model');

	} 
	public function index()
	{
		$this->load->view('header');
		$this->load->view('form_skl');
		$this->load->view('footer');
	
		
	}
	public function data_user($nik){
		$data = array('title' => 'Sistem Pelayanan Publik',
                        'Isi' => 'pelayan',
                        'data_is' => '1');
		$data['data_user'] = $this->form_skl_model->data_user($nik);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('headeruser',$data);
		$this->load->view('navuser',$data);
		$this->load->view('form_skl',$data);
	}


}
