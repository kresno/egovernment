<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_pengguna extends CI_Controller {


	public function index()
	{

		$data = array('title' => 'Edit Pengguna');
						
		$username=$this->uri->segment(4);
		$tb='user';
		$this->load->model('Manajemen_pengguna_model');
		$data['data']=$this->Manajemen_pengguna_model->getdata($username,$tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/edit_pengguna',$data);
		$this->load->view('admin/layout/footer',$data);
		
	}

public function update()
	{

		$username=$this->input->post('username');
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$data['nama_lengkap']=$this->input->post('nama_lengkap');
		$data['level']=$this->input->post('level');
		$data['email']=$this->input->post('email');
		$tb='user';
		$this->load->model('Manajemen_pengguna_model');
		$this->Manajemen_pengguna_model->editdata($username,$tb,$data);
		redirect('Admin/Manajemen_pengguna/tampil');
	}


}
