<?php
defined( 'BASEPATH') OR exit('No direct script access allowed');

class Admin_imb extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('imb_model');

	} 
	public function index()
	{

		$data = array('title' => 'IMB',
						'Isi' => 'admin/admin_imb');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/admin_imb',$data);
		$this->load->view('admin/layout/footer',$data);
		
		
	}
	public function data_user(){
		$date=$this->input->post('date');
		$data = array('title' => 'IMB',
						'Isi' => 'admin/admin_imb');
		$this->load->library('session');
		$username=$this->session->userdata['username'];
		$data['username']=$username;
		if(substr($username,0,2)=='rt'){
		$data['rt']=substr($username,2,3);
		$data['rw']=substr($username,5,3);
		$data['kelurahan']=substr($username,8);
		$tb='simb';
		$this->load->model('Admin_imb_model');
		$data['data_user'] = $this->Admin_imb_model->get_datas($tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/admin_imb',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
		else if(substr($username,0,2)=='rw'){
		$data['rw']=substr($username,2,3);
		$data['kelurahan']=substr($username,5);
		$tb='simb';
		$this->load->model('Admin_imb_model');
		$data['data_user'] = $this->Admin_imb_model->data_user($tb,$date);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_imb_rw',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
		else if(substr($username,0)=='admin'){ 
		$data['admin']=substr($username,5);
		$tb='simb';
		$this->load->model('Admin_imb_model');
		$data['data_user'] = $this->Admin_imb_model->get_datas($tb,$date);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_imb_camat',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
		else{
		$data['kelurahan']=substr($username,0);

		$tb='simb';
		$this->load->model('Admin_imb_model');
		$data['data_user'] = $this->Admin_imb_model->data_user($tb,$date);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_imb_lurah',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
	}
    public function lihat(){
		$data = array('title' => 'imb',
						'Isi' => 'admin/admin_imb');
		$id_simb=$this->uri->segment(4);
		$tb='simb';
		$this->load->model('imb_model');
		$data['data'] = $this->imb_model->lihat($id_simb,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/lihat_imb',$data);
		$this->load->view('admin/layout/footer',$data);
	
	}

		public function delete(){
			$id_simb=$this->uri->segment(4);
			$tb='simb';
			$this->load->model('imb_model');
			$this->imb_model->deletedata($id_simb,$tb);
			redirect('Admin/Admin_imb/data_user');
		}

		

	public function legalisasi(){
		$data = array('title' => 'IMB',
						'Isi' => 'admin/admin_imb');
		$id_simb=$this->uri->segment(4);
		$tb='simb';
		$this->load->model('Imb_model');
		$data['tgl_rt']=date("Y-m-d");
		$data['data'] = $this->imb_model->lihat($id_simb,$tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiimb',$data);
		$this->load->view('admin/layout/footer',$data);
	}
	public function legalisasirw(){
		$data = array('title' => 'imb',
						'Isi' => 'admin/admin_imb');
		$id_simb=$this->uri->segment(4);
		$tb='simb';
		$this->load->model('Imb_model');
		$data['tgl_rw']=date("Y-m-d");
		$data['data'] = $this->imb_model->lihat($id_simb,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiimbrw',$data);
		$this->load->view('admin/layout/footer',$data);
	}
	public function legalisasilurah(){
		$data = array('title' => 'imb',
						'Isi' => 'admin/admin_imb');
		$id_simb=$this->uri->segment(4);
		$tb='simb';
		$this->load->model('imb_model');
		$data['tgl_lurah']=date("Y-m-d");
		$data['data'] = $this->imb_model->lihat($id_simb,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiimblurah',$data);
	}
	public function legalisasicamat(){
		$data = array('title' => 'imb',
						'Isi' => 'admin/admin_imb');
		$id_simb=$this->uri->segment(4);
		$tb='simb';
		$this->load->model('imb_model');
		$data['tgl_camat']=date("Y-m-d");
		$data['data'] = $this->imb_model->lihat($id_simb,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiimbcamat',$data);
		$this->load->view('admin/layout/footer',$data);
	}



	}
