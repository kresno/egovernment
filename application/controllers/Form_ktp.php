<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_ktp extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('form_ktp_model');

	} 
	public function index()
	{
		$this->load->view('header');
		$this->load->view('form_ktp');
		$this->load->view('footer');
	}
	public function add(){
		$config['upload_path']          = './uploads/';
                $config['allowed_types']  = 'gif|jpg|png';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file_foto'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());



 		$ktp = array(
			'id_ktp' => $this->input->post('id_ktp'),
							'provinsi' =>$this->input->post('provinsi'),
							'kabupaten'=>$this->input->post('kabupaten'),
							'kecamatan'=>$this->input->post('kecamatan'),
							'kelurahan'=>$this->input->post('kelurahan'),
							'permohonan_ktp'=>$this->input->post('permohonan_ktp'),
							'nama'=>$this->input->post('nama'),
							'nik'=>$this->input->post('nik'),
							'alamat'=>$this->input->post('alamat'),
							'rt'=>$this->input->post('rt'),
							'rw'=>$this->input->post('rw'),
							'file_foto'=>$this->upload->data('file_name')
							);
		$this->form_ktp_model->add($ktp);
                }
	}
	public function data_user($nik){
		$data = array('title' => 'Sistem Pelayanan Publik',
                        'Isi' => 'pelayan',
                        'data_is' => '1');
		$data['data_user'] = $this->form_ktp_model->data_user($nik);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('headeruser',$data);
		$this->load->view('navuser',$data);
		$this->load->view('form_ktp',$data);
	}


}
