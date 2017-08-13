<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_kelurahan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$data = array('title' => 'Edit_kelurahan');
		$id_instansi=$this->uri->segment(4);
		$tb='instansi';
		$this->load->model('Manajemen_kelurahan_model');
		$data['data']=$this->Manajemen_kelurahan_model->getdata($id_instansi,$tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/edit_kelurahan',$data);
		$this->load->view('admin/layout/footer',$data);
		
	}

public function update()
	{

		$id_instansi=$this->input->post('id_instansi');
		$data['nama_instansi']=$this->input->post('nama_instansi');
		$data['kode_instansi']=$this->input->post('kode_instansi');
		$data['alamat_instansi']=$this->input->post('alamat_instansi');
		$data['kode_pos']=$this->input->post('kode_pos');
		$data['telepon']=$this->input->post('telepon');
		$tb='instansi';
		$this->load->model('Manajemen_kelurahan_model');
		$this->Manajemen_kelurahan_model->editdata($id_instansi,$tb,$data);
		redirect('Admin/Manajemen_kelurahan/tampil');
	}


}
