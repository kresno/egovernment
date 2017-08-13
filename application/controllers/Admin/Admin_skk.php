<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_skk extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_skk_model');
	} 
	
	public function index(){
		$data = array('title' => 'SKK',
						'Isi' => 'admin/admin_skk');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/admin_skk',$data);
		$this->load->view('admin/layout/footer',$data);
		
	}

	public function data_user(){
		$date=$this->input->post('date');
		$data = array('title' => 'skk',
						'Isi' => 'admin/admin_skk');
		$this->load->library('session');
		$username=$this->session->userdata['username'];
		$data['username']=$username;
		if(substr($username,0,2)=='rt'){
		$data['rt']=substr($username,2,3);
		$data['rw']=substr($username,5,3);
		$data['kelurahan']=substr($username,8);
		$tb='skk';
		$this->load->model('Admin_skk_model');
		$data['data_user'] = $this->Admin_skk_model->data_user($tb,$date);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/admin_skk',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
		else if(substr($username,0,2)=='rw'){
		$data['rw']=substr($username,2,3);
		$data['kelurahan']=substr($username,5);
		$tb='skk';
		$this->load->model('Admin_skk_model');
		$data['data_user'] = $this->Admin_skk_model->data_user($tb,$date);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_skk_rw',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
		else if(substr($username,0)=='admin'){ 
		$data['admin']=substr($username,5);
		$tb='skk';
		$this->load->model('Admin_skk_model');
		$data['data_user'] = $this->Admin_skk_model->get_datas($tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_skk_camat',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
		else{
		$data['kelurahan']=substr($username,0);
		$tb='skk';
		$this->load->model('Admin_skk_model');
		$data['data_user'] = $this->Admin_skk_model->data_user($tb,$date);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_skk_lurah',$data);
		$this->load->view('admin/layout/footer',$data);
		}
	}

	public function lihat(){
		$data = array('title' => 'SKK',
			'Isi' => 'admin/admin_skk');
		$id_skk=$this->uri->segment(4);
		$tb='skk';
		$this->load->model('skk_model');
		$data['data'] = $this->skk_model->lihat($id_skk,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/lihat_skk',$data);
	}
	public function delete(){
		$id_skk=$this->uri->segment(4);
		$tb='skk';
		$this->load->model('skk_model');
		$this->skk_model->deletedata($id_skk,$tb);
		redirect('Admin/Admin_skk/data_user');
	}
	public function update()
	{

		$id_skk=$this->input->post('id_skk');
		$data['tgl_daftar']=$this->input->post('tgl_daftar');
		
		$tb='user';
		$this->load->model('Admin_skk_model');
		$this->Skk_model->editdata($id_skk,$tb,$data);
		redirect('Admin/Admin_skk/data_user');
	}

	public function legalisasi(){
		$data = array('title' => 'skk',
						'Isi' => 'admin/admin_skk');
		$id_skk=$this->uri->segment(4);
		$tb='skk';
		$this->load->model('skk_model');
		$data['tgl_rt']=date("Y-m-d");
		$data['data'] = $this->skk_model->lihat($id_skk,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiskk',$data);
	}
	public function legalisasirw(){
		$data = array('title' => 'skk',
						'Isi' => 'admin/admin_skk');
		$id_skk=$this->uri->segment(4);
		$tb='skk';
		$this->load->model('skk_model');
		$data['tgl_rw']=date("Y-m-d");
		$data['data'] = $this->skk_model->lihat($id_skk,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiskkrw',$data);
	}
	public function legalisasilurah(){
		$data = array('title' => 'skk',
						'Isi' => 'admin/admin_skk');
		$id_skk=$this->uri->segment(4);
		$tb='skk';
		$this->load->model('skk_model');
		$data['tgl_lurah']=date("Y-m-d");
		$data['data'] = $this->skk_model->lihat($id_skk,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiskklurah',$data);
	}
	public function legalisasicamat(){
		$data = array('title' => 'skk',
						'Isi' => 'admin/admin_skk');
		$id_skk=$this->uri->segment(4);
		$tb='skk';
		$this->load->model('skk_model');
		$data['tgl_camat']=date("Y-m-d");
		$data['data'] = $this->skk_model->lihat($id_skk,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiskkcamat',$data);
	}
     public function cetak($id){
		$this->load->helper('pdf_helper');
		$tb='skus';
		//$this->load->model('Admin_skdu_model');
		$data=$this->skk_model->cetak($id,$tb);
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
		$obj_pdf->Output('Surat Keterangan Kematian.pdf', 'I');
	}
}
