<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_sku extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('form_sku_model');

	} 
	public function index()
	{
		$data = array('title' => 'Kecamatan Bogor Utara',
						'Isi' => 'form_sku');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('headeruser',$data);
		$this->load->view('navuser',$data);
		$this->load->view('form_sku',$data);
		
	}
	public function data_user($nik){
        $data = array('title' => 'Sistem Pelayanan Publik',
                        'Isi' => 'pelayan');
		$data['data_user'] = $this->form_sku_model->data_user($nik);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('headeruser',$data);
		$this->load->view('navuser',$data);
		$this->load->view('form_sku',$data);
	}


}
