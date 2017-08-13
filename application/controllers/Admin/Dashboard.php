<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{

		$data = array('title' => 'Halaman Dashboard',
						'Isi' => 'admin/dashboard/list');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/dashboard/list',$data);
		$this->load->view('admin/layout/footer',$data);	
		
	}


}
