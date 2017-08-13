<?php
defined( 'BASEPATH') OR exit('No direct script access allowed');

class Admin_ho extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('admin_ho_model');

	} 
	public function index()
	{

		$data = array('title' => 'HO',
						'Isi' => 'admin/admin_ho');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/admin_ho',$data);
		$this->load->view('admin/layout/footer',$data);
		
		
	}
	public function data_user(){
		$date=$this->input->post('date');
		$data = array('title' => 'HO',
						'Isi' => 'admin/admin_ho');
		$this->load->library('session');
		$username=$this->session->userdata['username'];
		$data['username']=$username;
		if(substr($username,0,2)=='rt'){
		$data['rt']=substr($username,2,3);
        $data['tgl_daftar']=date("Y-m-d");
		$data['rw']=substr($username,5,3);
		$data['kelurahan']=substr($username,8);
		$tb='siho';
		$this->load->model('Admin_ho_model');
		$data['data_user'] = $this->Admin_ho_model->data_user($tb,$date);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/admin_ho',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
		else if(substr($username,0,2)=='rw'){
		$data['rw']=substr($username,2,3);
		$data['kelurahan']=substr($username,5);
		$tb='siho';
		$this->load->model('Admin_ho_model');
		$data['data_user'] = $this->Admin_ho_model->get_datas($tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_ho_rw',$data);
		$this->load->view('admin/layout/footer',$data);
		}
		else if(substr($username,0)=='admin'){ 
		$data['admin']=substr($username,5);
		$tb='siho';
		$this->load->model('Admin_ho_model');
		$data['data_user'] = $this->Admin_ho_model->get_datas($tb,$date);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_ho_camat',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
		else{
        $data['kelurahan']=substr($username,0);
    	$test = array('title' => 'HO',
						'Isi' => 'admin/admin_ho');
		$tb='siho';
        $data['tgl_daftar']=date("Y-m-d");
		$this->load->model('Admin_ho_model');
		$data['data_user'] = $this->Admin_ho_model->data_user($tb,$date);
		
        $this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_ho_lurah',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
	}

	public function lihat(){
		$data = array('title' => 'ho',
						'Isi' => 'admin/admin_ho');
		$id_ho=$this->uri->segment(4);
		$tb='siho';
		$this->load->model('ho_model');
		$data['data'] = $this->ho_model->lihat($id_ho,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/lihat_ho',$data);
		$this->load->view('admin/layout/footer',$data);
	
		
	}
    public function cetak($id){
        $this->load->helper('pdf_helper');
        $this->load->model('Ho_model');
		$data['data'] = $this->Ho_model->test($id);
        
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
		$obj_pdf->Output('hidder ordonanti.pdf', 'I');
        redirect('admin/Admin_ho/data_user');    
    }    

	public function delete(){
		$id_ho=$this->uri->segment(4);
		$tb='siho';
		$this->load->model('ho_model');
		$this->ho_model->deletedata($id_ho,$tb);
		redirect('Admin/Admin_ho/data_user');
	}
	

	public function legalisasi(){
		$data = array('title' => 'ho',
						'Isi' => 'admin/admin_ho');
		$id_ho=$this->uri->segment(4);
		$tb='siho';
		$this->load->model('ho_model');
		$data['tgl_rt']=date("Y-m-d");
		$data['data'] = $this->ho_model->lihat($id_ho,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiho',$data);
	}
	public function legalisasirw(){
		$data = array('title' => 'ho',
						'Isi' => 'admin/admin_ho');
		$id_ho=$this->uri->segment(4);
		$tb='siho';
		$this->load->model('ho_model');
		$data['tgl_rw']=date("Y-m-d");
		$data['data'] = $this->ho_model->lihat($id_ho,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasihorw',$data);
	}
	public function legalisasilurah(){
		$data = array('title' => 'ho',
						'Isi' => 'admin/admin_ho');
		$id_ho=$this->uri->segment(4);
		$tb='siho';
		$this->load->model('ho_model');
		$data['tgl_lurah']=date("Y-m-d");
		$data['data'] = $this->ho_model->lihat($id_ho,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiholurah',$data);
	}
	public function legalisasicamat(){
		$data = array('title' => 'ho',
						'Isi' => 'admin/admin_ho');
		$id_ho=$this->uri->segment(4);
		$tb='siho';
		$this->load->model('ho_model');
		$data['tgl_camat']=date("Y-m-d");
		$data['data'] = $this->ho_model->lihat($id_ho,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasihocamat',$data);
	}
	}
