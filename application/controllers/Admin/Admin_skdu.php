<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_skdu extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_skdu_model');
	} 
	
	public function index()
	{

		$data = array('title' => 'SKDU',
						'Isi' => 'admin/admin_skdu');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/admin_skdu',$data);
		$this->load->view('admin/layout/footer',$data);
		
	}

	public function data_user(){
        
		$date=$this->input->post('date');
		$data = array('title' => 'SKDU',
						'Isi' => 'admin/admin_skdu');
		
        $this->load->library('session');
		$username=$this->session->userdata['username'];
		$data['username']=$username;
		
        if(substr($username,0,2)=='rt'){
		$data['rt']=substr($username,2,3);
    	$data['tgl_daftar']=date("Y-m-d");
		$data['rw']=substr($username,5,3);
		$data['kelurahan']=substr($username,8);
		$tb='skdu';
		
        $this->load->model('Admin_skdu_model');
		$data['data_user'] = $this->Admin_skdu_model->data_user($tb,$date);
		
        $this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/admin_skdu',$data);
		$this->load->view('admin/layout/footer',$data);
		}
        
		else if(substr($username,0,2)=='rw'){
		$data['rw']=substr($username,2,3);
    	$data['tgl_daftar']=date("Y-m-d");
		$data['kelurahan']=substr($username,5);
		$tb='skdu';
		$this->load->model('Admin_skdu_model');
		$data['data_user'] = $this->Admin_skdu_model->data_user($tb,$date);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_skdu_rw',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
        
		else if(substr($username,0)=='admin'){ 
		$data['admin']=substr($username,5);
    	$data['tgl_daftar']=date("Y-m-d");
		$tb='skdu';
		$this->load->model('Admin_skdu_model');
		$data['data_user'] = $this->Admin_skdu_model->get_datas($tb);
        
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_skdu_camat',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
		else{
            
		$data['kelurahan']=substr($username,0);
    	$test = array('title' => 'SKDU',
						'Isi' => 'admin/admin_skdu');
        $title = "SKDU";
        $data['tgl_daftar']=date("Y-m-d");
		$tb='skdu';
		$this->load->model('Admin_skdu_model');
		$data['data_user'] = $this->Admin_skdu_model->data_user($tb,$date);
        
        $this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$title);
		$this->load->view('admin/legalisasi_skdu_lurah',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
	}

	public function lihat($id){
		$data = array('title' => 'SKDU',
						'Isi' => 'admin/admin_skdu');
		$this->load->model('Skdu_model');
		$data['data'] = $this->Skdu_model->lihat($id);
    
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/lihat_skdu',$data);

	}
    
    public function cetak($id){
        $this->load->helper('pdf_helper');
        $this->load->model('Skdu_model');
		$data['data'] = $this->Skdu_model->test($id);
        
        // print_r($data);
		tcpdf();
		$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', true);
		$obj_pdf->SetCreator("Billy Ardhiaseno");
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
        
        $this->load->view('admin/test', $data);
        
        $contentT = ob_get_contents();
		ob_end_clean();
		$obj_pdf->writeHTML($contentT, false, false, false, false, '');
		$obj_pdf->Output('Surat Keterangan Domisili Usaha.pdf', 'I');
        redirect('admin/Admin_skdu/data_user');    
    }    


	public function delete(){
		$id_skdu=$this->uri->segment(4);
		$tb='skdu';
		$this->load->model('Skdu_model');
		$this->Skdu_model->deletedata($id_skdu,$tb);
		redirect('Admin/Admin_skdu/data_user');
	}
	

	public function legalisasi(){
		$data = array('title' => 'SKDU',
						'Isi' => 'admin/admin_skdu');
		$id_skdu=$this->uri->segment(4);
		$tb='skdu';
		$this->load->model('Skdu_model');
		$data['tgl_rt']=date("Y-m-d");
		$data['data'] = $this->Skdu_model->lihat($id_skdu,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiskdu',$data);
	}
    
	public function legalisasirw(){
		$data = array('title' => 'SKDU',
						'Isi' => 'admin/admin_skdu');
		$id_skdu=$this->uri->segment(4);
		$tb='skdu';
		  $this->load->model('Skdu_model');
		$data['tgl_rw']=date("Y-m-d");
		$data['data'] = $this->Skdu_model->lihat($id_skdu,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiskdurw',$data);
	}
	public function legalisasilurah(){
		$data = array('title' => 'SKDU',
						'Isi' => 'admin/admin_skdu');
		$id_skdu=$this->uri->segment(4);
		$tb='skdu';
		$this->load->model('Skdu_model');
		$data['tgl_lurah']=date("Y-m-d");
		$data['data'] = $this->Skdu_model->lihat($id_skdu,$tb);
        
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiskdulurah',$data);
	}
    
	public function legalisasicamat(){
		$data = array('title' => 'SKDU',
						'Isi' => 'admin/admin_skdu');
		$id_skdu=$this->uri->segment(4);
		$tb='skdu';
		$this->load->model('Skdu_model');
		$data['tgl_camat']=date("Y-m-d");
		$data['data'] = $this->Skdu_model->lihat($id_skdu,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiskducamat',$data);
	}
    
}
