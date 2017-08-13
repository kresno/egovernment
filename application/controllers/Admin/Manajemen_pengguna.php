<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_pengguna extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('manajemen_pengguna_model');
	}
	public function index()
	{

		$data = array('title' => 'Manajemen_pengguna',
						'Isi' => 'admin/Manajemen_pengguna');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/Manajemen_pengguna',$data);
		$this->load->view('admin/layout/footer',$data);
		
	}
	public function tampil()
	{
		$data = array('title' => 'Manajemen_pengguna',
						'Isi' => 'admin/Manajemen_pengguna');
		$data['Manajemen_pengguna'] = $this->manajemen_pengguna_model->tampil();
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/Manajemen_pengguna');
		$this->load->view('admin/layout/footer',$data);
		
	}

	public function tambah(){
		$Manajemen_pengguna = array(
			'username' => $this->input->post('username'),
						'nama_lengkap' =>$this->input->post('nama_lengkap'),
							'id_instansi'=>$this->input->post('id_instansi'),
							'password'=>$this->input->post('password'),
							'level'=>$this->input->post('level'));
		$data['tambah']=$this->manajemen_pengguna_model->tambah($Manajemen_pengguna);
		$this->load->view('Manajemen_pengguna',$data['tambah']);
	}
	public function edit(){
		$data['ubah']=$this->Manajemen_pengguna->edit();
		$this->load->view('Manajemen_pengguna',$data['ubah']);
	}

	public function delete(){
		$username=$this->uri->segment(4);
		$tb='user';
		$this->load->model('Manajemen_pengguna_model');
		$this->Manajemen_pengguna_model->deletedata($username,$tb);
		redirect('Admin/Manajemen_pengguna/tampil');
	}

}

