<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function bantuan()
    {
        $this->load->view('header');
		$this->load->view('v_bantuan');
		$this->load->view('footer');
    }
    
    public function index()
	{
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');
		
	}
    
	public function profile()
	{
		$data = array('title' => 'Kecamatan Bogor Utara',
						'Isi' => 'propem');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('headerhome',$data);
		$this->load->view('navuser',$data);
		$this->load->view('propem',$data);
		
	}
	public function pejabat(){
		$data = array('title' => 'Kecamatan Bogor Utara',
						'Isi' => 'pejabat');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('headerpejabat',$data);
		$this->load->view('navuser',$data);
		$this->load->view('pejabat',$data);
	}
	
	public function pegawai(){
		$data = array('title' => 'Kecamatan Bogor Utara',
						'Isi' => 'pegawai');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('headerpejabat',$data);
		$this->load->view('navuser',$data);
		$this->load->view('pegawai',$data);
	}
	public function stuktur_organisasi(){
		$data = array('title' => 'Kecamatan Bogor Utara',
						'Isi' => 'struktur');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('headerpejabat',$data);
		$this->load->view('navuser',$data);
		$this->load->view('struktur',$data);
	}
    public function lokasi(){
		$data = array('title' => 'Kecamatan Bogor Utara',
						'Isi' => 'lokasi');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('headerhome',$data);
		$this->load->view('navuser',$data);
		$this->load->view('lokasi',$data);
	}
	public function pelayanan(){
		$data = array('title' => 'Kecamatan Bogor Utara',
						'Isi' => 'pelayanan');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('headeruser',$data);
		$this->load->view('navuser',$data);
		$this->load->view('pelayanan',$data);
	}
	
	public function galery(){
		$data = array('title' => 'Kecamatan Bogor Utara',
						'Isi' => 'galeri');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('headerhome',$data);
		$this->load->view('navuser',$data);
		$this->load->view('galeri',$data);
	}
	public function berita(){
		$data = array('title' => 'Kecamatan Bogor Utara',
						'Isi' => 'berita');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('headeruser',$data);
		$this->load->view('navuser',$data);
		$this->load->view('berita',$data);
	}

}