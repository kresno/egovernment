<?php
defined( 'BASEPATH') OR exit('No direct script access allowed');

class Admin_skl extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('skl_model');

	} 

	public function index(){
		$data = array('title' => 'SKL',
			'Isi' => 'admin/admin_skl');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/admin_skl',$data);	
		$this->load->view('admin/layout/footer',$data);
	}
	public function data_user(){
		$date=$this->input->post('date');
		$data = array('title' => 'SKL',
			'Isi' => 'admin/admin_skl');
		$this->load->library('session');
		$username=$this->session->userdata['username'];
		$data['username']=$username;
		if(substr($username,0,2)=='rt'){
			$data['rt']=substr($username,2,3);
			$data['rw']=substr($username,5,3);
			$data['kelurahan']=substr($username,8);
			$tb='skl';
			$this->load->model('Admin_skl_model');
			$data['data_user'] = $this->Admin_skl_model->data_user($tb,$date);
			$this->load->view('admin/layout/head',$data);
			$this->load->view('admin/layout/header',$data);
			$this->load->view('admin/layout/nav',$data);
			$this->load->view('admin/admin_skl',$data);
			$this->load->view('admin/layout/footer',$data);

		}
		else if(substr($username,0,2)=='rw'){
			$data['rw']=substr($username,2,3);
			$data['kelurahan']=substr($username,5);
			$tb='skl';
			$this->load->model('Admin_skl_model');
			$data['data_user'] = $this->Admin_skl_model->data_user($tb,$date);
			$this->load->view('admin/layout/head',$data);
			$this->load->view('admin/layout/header',$data);
			$this->load->view('admin/layout/nav',$data);
			$this->load->view('admin/legalisasi_skl_rw',$data);
			$this->load->view('admin/layout/footer',$data);

		}
		else if(substr($username,0)=='admin'){ 
			$data['admin']=substr($username,5);
			$tb='skl';
			$this->load->model('Admin_skl_model');
			$data['data_user'] = $this->Admin_skl_model->get_datas($tb);
			$this->load->view('admin/layout/head',$data);
			$this->load->view('admin/layout/header',$data);
			$this->load->view('admin/layout/nav',$data);
			$this->load->view('admin/legalisasi_skl_camat',$data);
			$this->load->view('admin/layout/footer',$data);

		}
		else{
			$data['kelurahan']=substr($username,0);

			$tb='skl';
			$this->load->model('Admin_skl_model');
			$data['data_user'] = $this->Admin_skl_model->data_user($tb,$date);
			$this->load->view('admin/layout/head',$data);
			$this->load->view('admin/layout/header',$data);
			$this->load->view('admin/layout/nav',$data);
			$this->load->view('admin/legalisasi_skl_lurah',$data);
			$this->load->view('admin/layout/footer',$data);
		}
	}

	public function delete(){
		$id_skl=$this->uri->segment(4);
		$tb='skl';
		$this->load->model('Skl_model');
		$this->Skl_model->deletedata($id_skl,$tb);
		redirect('Admin/Admin_skl/data_user');
	}

	public function lihat($id_skl){
		$data = array('title' => 'SKL',
			'Isi' => 'admin/admin_skl');
		$id_skl=$this->uri->segment(4);
		$tb='skl';
		$this->load->model('Skl_model');
		$data['data'] = $this->Skl_model->lihat($id_skl,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/lihat_skl',$data);
	}
     public function cetak($id){
		$this->load->helper('pdf_helper');
		$tb='skl';
		$this->load->model('Skl_model');
		$data=$this->skl_model->cetak($id);
		// print_r($data);
		tcpdf();
		$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', true);
		$obj_pdf->SetCreator("Fitri Juariah");
		$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$obj_pdf->SetDefaultMonospacedFont('helvetica');
		// $obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		// $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		$obj_pdf->SetMargins(PDF_MARGIN_LEFT, 5, PDF_MARGIN_RIGHT);
		$obj_pdf->SetAutoPageBreak(FALSE, PDF_MARGIN_BOTTOM);
		$obj_pdf->SetFont('helvetica', '', 9);
		// $obj_pdf->setFontSubsetting(false);
		$obj_pdf->AddPage();
		ob_start();
		
		// ob_start();
		$content = $this->load->view('admin/print',$data);

 $contentT = ob_get_contents();
		ob_end_clean();
		$obj_pdf->writeHTML($contentT, false, false, false, false, '');
		$obj_pdf->Output('Surat Keterangan Lahir.pdf', 'I');
	}

	public function legalisasi(){
		$data = array('title' => 'SKL',
			'Isi' => 'admin/admin_skl');
		$id_skl=$this->uri->segment(4);
		$tb='skl';
		$this->load->model('skl_model');
		$data['data'] = $this->skl_model->lihat($id_skl,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiskl',$data);
	}
	public function legalisasirw(){
		$data = array('title' => 'SKL',
			'Isi' => 'admin/admin_skl');
		$id_skl=$this->uri->segment(4);
		$tb='skl';
		$this->load->model('skl_model');
		$data['data'] = $this->skl_model->lihat($id_skl,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasisklrw',$data);
	}
	public function legalisasilurah(){
		$data = array('title' => 'SKL',
			'Isi' => 'admin/admin_skl');
		$id_skl=$this->uri->segment(4);
		$tb='skl';
		$this->load->model('skl_model');
		$data['data'] = $this->skl_model->lihat($id_skl,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiskllurah',$data);
	}
	public function legalisasicamat(){
		$data = array('title' => 'SKL',
			'Isi' => 'admin/admin_skl');
		$id_skl=$this->uri->segment(4);
		$tb='skl';
		$this->load->model('skl_model');
		$data['data'] = $this->skl_model->lihat($id_skl,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasisklcamat',$data);
	}


}
