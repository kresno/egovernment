<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_pengguna extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('manajemen_pengguna_model');
	}

	public function index(){
		$data = array('title' => 'Tambah_pengguna');
		$username=$this->uri->segment(4);
		$tb='user';
		$this->load->model('manajemen_pengguna_model');
		$data['data']=$this->manajemen_pengguna_model->getdata($username,$tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/tambah_pengguna',$data);
		$this->load->view('admin/layout/footer',$data);
		
	}

	public function tambah(){
		$username = array(
			'username' => $this->input->post('username'),
			'password'=>$this->input->post('password'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'level'=>$this->input->post('level'),
			'email'=>$this->input->post('email'));
		$data['tambah']=$this->manajemen_pengguna_model->tambah($username);
		redirect('Admin/Manajemen_pengguna/tampil');
	}
}
