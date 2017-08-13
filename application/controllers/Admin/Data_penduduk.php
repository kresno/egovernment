<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_penduduk extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('data_penduduk_model');
	}

	public function index()
	{

		$data = array('title' => 'Data_penduduk',
						'Isi' => 'admin/Data_penduduk');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/Data_penduduk',$data);
		$this->load->view('admin/layout/footer',$data);
		
	}
	public function tampil(){
		$data = array('title' => 'Data_penduduk',
						'Isi' => 'admin/Data_penduduk');
		$data['data_penduduk'] = $this->data_penduduk_model->tampil();
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/data_penduduk');
		$this->load->view('admin/layout/footer');
	}
	
	public function edit($id){

		$data['title'] = 'Edit penduduk';
		$data['Isi'] = 'admin/instansi/edit';
		$data['user'] = $this->Data_penduduk_model->get_user_by_id($id);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/edit_penduduk',$data);
		$this->load->view('admin/layout/footer',$data);

	}

	public function delete(){
		$nik=$this->uri->segment(4);
		$tb='data_penduduk';
		$this->load->model('Data_penduduk_model');
		$this->Data_penduduk_model->deletedata($nik,$tb);
		redirect('Admin/Data_penduduk/tampil');
	}

}
