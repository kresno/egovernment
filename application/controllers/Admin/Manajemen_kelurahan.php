<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_kelurahan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('manajemen_kelurahan_model');
	}

	public function index()
	{

		$data = array('title' => 'Manajemen_kelurahan',
						'Isi' => 'admin/Manajemen_kelurahan');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/Manajemen_kelurahan',$data);
		$this->load->view('admin/layout/footer',$data);
		
	}
	public function tampil(){
		$data = array('title' => 'Manajemen_kelurahan',
						'Isi' => 'admin/Manajemen_kelurahan');
		$data['Manajemen_kelurahan'] = $this->manajemen_kelurahan_model->tampil();
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/Manajemen_kelurahan');
		$this->load->view('admin/layout/footer');
	}
	
	public function tambah(){
		$Manajemen_kelurahan = array(
			'id_instansi' => $this->input->post('id_instansi'),
								'nama_instansi' =>$this->input->post('nama_instansi'),
								'kode_instansi'=>$this->input->post('kode_instansi'),
								'alamat_instansi'=>$this->input->post('alamat_instansi'),
								'kode_pos'=>$this->input->post('kode_pos'),
								'telepon'=>$this->input->post('telepon'));
		$data['tambah']=$this->manajemen_kelurahan_model->tambah($Manajemen_kelurahan);
		$this->load->view('Manajemen_kelurahan',$data['tambah']);
	}


	public function edit(){
		$data['ubah']=$this->Manajemen_kelurahan->edit();
		$this->load->view('Manajemen_kelurahan',$data['ubah']);
	}

	public function delete(){
		$id_instansi=$this->uri->segment(4);
		$tb='instansi';
		$this->load->model('Manajemen_kelurahan_model');
		$this->Manajemen_kelurahan_model->deletedata($id_instansi,$tb);
		redirect('Admin/Manajemen_kelurahan/tampil');
	}
}

