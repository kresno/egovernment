<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('login_model');


	} 
	public function index()
	{

		$data = array('title' => 'Login Administrator');
		$this->load->view('admin/login_view', $data);
		
	//public function daftar(){
		//$arrayName = array('username' => $this->input->post('username'),
		//					'password' => $this->input->post('password'),
		//					'jenisk' => $this->input->post('jenisk'),
		//					'alamat' => $this->input->post('alamat'),
		//					'telp' => $this->input->post('telp')
		//					);
		//$this->login_model->add($arrayName);
	//}
		
	}

	public function proses_login()
	{
		$this->load->library('form_validation');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$level=$this->input->post('level');
        
		$data = array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password')
			);
		$user = $this->login_model->getAccount($username,$password);
		$sess_data = array(
			'username'=>$user->username,
			'level'=>$user->level);
		$this->session->set_userdata($sess_data);
			switch ($sess_data['level']) {
					case 'kecamatan':
						redirect('admin/dashboard');
						break;
					case 'kelurahan':
						redirect('admin/dashboard');
						break;
					case 'rt':
						redirect('admin/dashboard');
						break;
					case 'rw':
							redirect('admin/dashboard');
							break;
					default:
						redirect();
						break;
				}
		}

}
