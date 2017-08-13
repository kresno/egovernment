<?php
defined( 'BASEPATH') OR exit('No direct script access allowed');

class Admin_ktp extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Admin_ktp_model');

	} 
	public function index()
	{

		$data = array('title' => 'KTP',
						'Isi' => 'admin/admin_ktp');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/admin_ktp',$data);
		$this->load->view('admin/layout/footer',$data);
		
		
	}
	public function data_user(){
		$date=$this->input->post('date');
		$data = array('title' => 'KTP',
						'Isi' => 'admin/admin_ktp');
		$this->load->library('session');
		$username=$this->session->userdata['username'];
		$data['username']=$username;
		if(substr($username,0,2)=='rt'){
		$data['rt']=substr($username,2,3);
		$data['rw']=substr($username,5,3);
		$data['kelurahan']=substr($username,8);
		$tb='ktp';
		$this->load->model('Admin_ktp_model');
		$data['data_user'] = $this->Admin_ktp_model->get_datas($tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/admin_ktp',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
		else if(substr($username,0,2)=='rw'){
		$data['rw']=substr($username,2,3);
		$data['kelurahan']=substr($username,5);
		$tb='ktp';
		$this->load->model('Admin_ktp_model');
		$data['data_user'] = $this->Admin_ktp_model->data_user($tb,$date);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_ktp_rw',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
		else if(substr($username,0)=='admin'){ 
		$data['admin']=substr($username,5);
		$tb='ktp';
		$this->load->model('Admin_ktp_model');
		$data['data_user'] = $this->Admin_ktp_model->data_user($tb,$date);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_ktp_camat',$data);
		$this->load->view('admin/layout/footer',$data);
		}
		else{
		$data['kelurahan']=substr($username,0);
		$tb='ktp';
		$this->load->model('Admin_ktp_model');
		$data['data_user'] = $this->Admin_ktp_model->get_datas($tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_ktp_lurah',$data);
		$this->load->view('admin/layout/footer',$data);
		}
	}
	
	public function lihat(){
		$data = array('title' => 'KTP',
						'Isi' => 'admin/admin_ktp');
		$id_ktp=$this->uri->segment(4);
		$tb='ktp';
		$this->load->model('ktp_model');
		$data['data'] = $this->ktp_model->lihat($id_ktp,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/lihat_ktp',$data);
		$this->load->view('admin/layout/footer',$data);
	
		
	}

	public function delete(){
		$id_ktp=$this->uri->segment(4);
		$tb='ktp';
		$this->load->model('ktp_model');
		$this->ktp_model->deletedata($id_ktp,$tb);
		redirect('Admin/Admin_ktp/data_user');
	}
	public function update()
	{

		$id_ktp=$this->input->post('id_ktp');
		$data['tgl_daftar']=$this->input->post('tgl_daftar');
		
		$tb='user';
		$this->load->model('Admin_ktp_model');
		$this->ktp_model->editdata($id_ktp,$tb,$data);
		redirect('Admin/Admin_ktp/data_user');
	}

	public function legalisasi(){
		$data = array('title' => 'ktp',
						'Isi' => 'admin/admin_ktp');
		$id_ktp=$this->uri->segment(4);
		$tb='ktp';
		$this->load->model('ktp_model');
		$data['tgl_rt']=date("Y-m-d");
		$data['data'] = $this->ktp_model->lihat($id_ktp,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiktp',$data);
		$this->load->view('admin/layout/footer',$data);
	}
	public function legalisasirw(){
		$data = array('title' => 'ktp',
						'Isi' => 'admin/admin_ktp');
		$id_ktp=$this->uri->segment(4);
		$tb='ktp';
		$this->load->model('ktp_model');
		$data['tgl_rw']=date("Y-m-d");
		$data['data'] = $this->ktp_model->lihat($id_ktp,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiktprw',$data);
		$this->load->view('admin/layout/footer',$data);
	}
	public function legalisasilurah(){
		$data = array('title' => 'ktp',
						'Isi' => 'admin/admin_ktp');
		$id_ktp=$this->uri->segment(4);
		$tb='ktp';
		$this->load->model('ktp_model');
		$data['tgl_lurah']=date("Y-m-d");
		$data['data'] = $this->ktp_model->lihat($id_ktp,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiktplurah',$data);
		$this->load->view('admin/layout/footer',$data);
	}
	public function legalisasicamat(){
		$data = array('title' => 'ktp',
						'Isi' => 'admin/admin_ktp');
		$id_ktp=$this->uri->segment(4);
		$tb='ktp';
		$this->load->model('ktp_model');
		$data['tgl_camat']=date("Y-m-d");
		$data['data'] = $this->ktp_model->lihat($id_ktp,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiktpcamat',$data);
		$this->load->view('admin/layout/footer',$data);
	}


	}
