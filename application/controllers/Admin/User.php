<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('instansi_model');
		$this->load->model('user_model');
	}
 
	public function index()
	{
		$user =$this->user_model->listing();

		$data = array('title' => 'Edit',
					'user' 	=>$user,
					'Isi' => 'admin/edit');
 		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/edit',$data);
		$this->load->view('admin/layout/footer',$data);
		
	}
	public function tambah(){
		$instansi=$this->instansi_model->listing();
		//validasi
		$valid=$this->form_validation;
		$valid->set_rules('nama','Nama','required',
			array('required'=> 'Nama harus diisi'));
		$valid->set_rules('usernamer','Username','required|is unique[user.username]',
			array('required'=> 'Username harus diisi',
				'is_unique' => 'Ooopps...Username<strong>'.
				$this->input->post('username')
				'</strong> sudah digunakan.Buat username baru!'));
		$valid->set_rules('password','password','required|max_length[20]|min_length[6]',
			array('required'=> 'password harus diisi',
				'min_length'=> 'password minimal 6 karakter',
				'max_length'=> 'password maksimak 20 karakter'));
		$valid->set_rules('nama_lengkap','nama_lengkap','required',
			array('required'=> 'Nama_lengkap harus diisi'));
		$valid->set_rules('no_telp/hp','No telp/Hp','required',
			array('required'= >'No telp/Hp harus diisi'));
		if(valid->run()===FALSE){
			//end validasi

			$data= array('title' => 'Edit',
					'user' 	=>$user,
					'Isi' => 'admin/edit');
 		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/edit',$data);
		$this->load->view('admin/layout/footer',$data);

		//masuk database
	}else{
		$i= $this->input;
		$data= array('nama' 	->$i->post('nama'),
					'username' 	->$i->post('username'),
					'password' 	->$i->post('password'),
					'nama_lengkap' 	->$i->post('nama_lengkap'),
					'id_instansi' 	->$i->post('id_instansi'),
			);
		$this->user_model->tambah($data);
		$this->session->set_flashdata('sukses','user/instasi telah ditambah');
		redirect(base_url('admin/user'));
		}
		
	}


}
