<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_kelurahan extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('manajemen_kelurahan_model');
	}

	public function index()
	{

		$data = array('title' => 'Tambah_kelurahan');
		$id_instansi=$this->uri->segment(4);
		$tb='instansi';
		$this->load->model('manajemen_kelurahan_model');
		$data['data']=$this->manajemen_kelurahan_model->getdata($id_instansi,$tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/tambah_kelurahan',$data);
		$this->load->view('admin/layout/footer',$data);
		
	}

	public function tambah(){
		$id_instansi = array(
			'id_instansi' => $this->input->post('id_instansi'),
			'nama_instansi' =>$this->input->post('nama_instansi'),
			'kode_instansi'=>$this->input->post('kode_instansi'),
			'alamat_instansi'=>$this->input->post('alamat_instansi'),
			'kode_pos'=>$this->input->post('kode_pos'),
			'telepon'=>$this->input->post('telepon'));
		$data['tambah']=$this->manajemen_kelurahan_model->tambah($id_instansi);
		redirect('Admin/Manajemen_kelurahan/tampil');
	}
}
