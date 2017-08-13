<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_imb extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->model('form_imb_model');

	} 
	public function index()
	{
		$this->load->view('header');
		$this->load->view('form_imb');
		$this->load->view('footer');
	
		
	}
	public function nik(){
    	$nik=$this->input->post('nik');
    	$cek=$this->imb_model->input_nik($nik);
		if($cek){
			redirect('form_imb/data_user/'.$nik);
		}else{
			redirect('imb');
		}
    }
    public function data_user($nik){
    	$data = array('title' => 'Sistem Pelayanan Publik',
                        'Isi' => 'pelayan',
                        'data_is' => '1');
		$data['data_user'] = $this->form_imb_model->data_user($nik);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('headeruser',$data);
		$this->load->view('navuser',$data);
		$this->load->view('form_imb',$data);
	}
	



}
