<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_penduduk extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('data_penduduk_model');
	}

	public function index(){
		$data = array('title' => 'Tambah_penduduk');
		$nik=$this->uri->segment(4);
		$tb='data_penduduk';
		$this->load->model('Data_penduduk_model');
		$data['data']=$this->Data_penduduk_model->getdata($nik,$tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/tambah_penduduk',$data);
		$this->load->view('admin/layout/footer',$data);
		
	}

	public function tambah(){
		$data_penduduk = array(
			'nik' => $this->input->post('nik'),
			'nama' =>$this->input->post('nama'),
			'tgl_lahir'=>$this->input->post('tgl_lahir'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'alamat'=>$this->input->post('alamat'),
			'rt'=>$this->input->post('rt'),
			'rw'=>$this->input->post('rw'),
			'status_kawin'=>$this->input->post('status_kawin'),
			'pekerjaan'=>$this->input->post('pekerjaan'),
			'kewarganegaraan'=>$this->input->post('kewarganegaraan'));
		$data['tambah']=$this->data_penduduk_model->tambah($data_penduduk);
		//$this->load->view('Data_penduduk',$data['tambah']);
		redirect('Admin/Data_penduduk/tampil');
	}

}
