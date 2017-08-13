<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('data_penduduk_model');
	}

	public function index(){
		$data = array('title' => 'register');
		$nik=$this->uri->segment(4);
		$tb='data_penduduk';
		$this->load->model('Data_penduduk_model');
		$data['data']=$this->Data_penduduk_model->getdata($nik,$tb);
		$this->load->view('headeruser',$data);
		$this->load->view('navuser',$data);
		$this->load->view('register',$data);

		
	}

	public function tambah(){
		$nik=$this->input->post('nik');
		$cek=substr($nik,0,6);
		if($cek=='327105'){
		$register = array(
			'nik' => $this->input->post('nik'),
			'password' =>$this->input->post('password'),
			'nama' =>$this->input->post('nama'),
			'tempat_lahir' =>$this->input->post('tempat_lahir'),
			'tgl_lahir'=>$this->input->post('tgl_lahir'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'alamat'=>$this->input->post('alamat'),
			'agama'=>$this->input->post('agama'),
			'rt'=>$this->input->post('rt'),
			'rw'=>$this->input->post('rw'),
			'kelurahan'=>$this->input->post('kelurahan'),
			'status_kawin'=>$this->input->post('status_kawin'),
			'no_hp'=>$this->input->post('no_hp'),
			'email'=>$this->input->post('email'),
			'pekerjaan'=>$this->input->post('pekerjaan'),
			'kewarganegaraan'=>$this->input->post('kewarganegaraan'));
		$this->load->model('Register_model');
		$data['tambah']=$this->Register_model->tambah($register);
		//$this->load->view('Data_penduduk',$data['tambah']);
		redirect('home/pelayanan');
			
		}
		else{
		echo "<script>alert('Gagal Register, Anda bukan warga kecamatan Bogor Utara.');window.location='index';</script>";exit;
			$this->session->set_flashdata('info','Gagal Register, Anda bukan warga kecamatan Bogor Utara.');
	}


}
}

