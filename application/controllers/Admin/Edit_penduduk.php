<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_penduduk extends CI_Controller {

	
	public function index()
	{

		$data = array('title' => 'Edit Penduduk');
		$nik=$this->uri->segment(4);
		$tb='data_penduduk';
		$this->load->model('Data_penduduk_model');
		$data['data']=$this->Data_penduduk_model->getdata($nik,$tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/edit_penduduk',$data);
		$this->load->view('admin/layout/footer',$data);
		
	}

public function update()
	{

		$nik=$this->input->post('nik');
		$data['nama']=$this->input->post('nama');
		$data['tgl_lahir']=$this->input->post('tgl_lahir');
		$data['jenis_kelamin']=$this->input->post('jenis_kelamin');
		$data['alamat']=$this->input->post('alamat');
		$data['status_kawin']=$this->input->post('status_kawin');
		$data['pekerjaan']=$this->input->post('pekerjaan');
		$data['kewarganegaraan']=$this->input->post('kewarganegaraan');
		$data['rt']=$this->input->post('rt');
		$data['rw']=$this->input->post('rw');
		$tb='data_penduduk';
		$this->load->model('Data_penduduk_model');
		$this->Data_penduduk_model->editdata($nik,$tb,$data);
		redirect('Admin/Data_penduduk/tampil');
	}


}
