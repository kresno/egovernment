<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class header extends CI_Controller {

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
	public function test()
	{
		
		$this->load->view('headerhome');
		$this->load->view('test');
		$this->load->view('footer');
		
	}
	public function galeri()
	{
		$this->load->view('headerhome');
		$this->load->view('galeri');
		$this->load->view('footer');
	
		
	}
	public function sejarah()
	{
		$this->load->view('headerhome');
		$this->load->view('sejarah');
		$this->load->view('footer');
		
	}
	public function register()
	{
		$this->load->view('headerhome');
		$this->load->view('register');
		
		
	}
	public function visi_misi()
	{
		
		$this->load->view('headerhome');
		$this->load->view('visi_misi');
		$this->load->view('footer');
		
	}
	public function struktur()
	{
		$this->load->view('headerhome');
		$this->load->view('struktur');
		$this->load->view('footer');
		
	}
	public function fungsi()
	{
		$this->load->view('headerhome');
		$this->load->view('tupoksi');
		$this->load->view('footer');
		
	}
	
    public function unit_kerja(){
    	$this->load->view('headerhome');
		$this->load->view('unit_kerja');
		$this->load->view('footer');
    }
    public function profil_camat()
	{
		$this->load->view('headerhome');
		$this->load->view('profil_camat');
		$this->load->view('footer');
	}
	public function wakil()
	{
		$this->load->view('headerhome');
		$this->load->view('wakil_camat');
		$this->load->view('footer');
		
	}
    
	public function profil()
	{
		$this->load->view('headerhome');
		$this->load->view('profil');
		$this->load->view('footer');
		
	}

	public function pejabat()
	{
		$this->load->view('headerhome');
		$this->load->view('pejabat');
		$this->load->view('footer');
		
	}
	public function wilayah()
	{
		$this->load->view('headerhome');
		$this->load->view('wilayah');
		$this->load->view('footer');
		
	}
	public function faq()
	{
		$this->load->view('headerhome');
		$this->load->view('faq');
		$this->load->view('footer');
		
	}
	public function kontak()
	{
		$this->load->view('headerhome');
		$this->load->view('kontak');
		$this->load->view('footer');
		
	}
    
    


}
