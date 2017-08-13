<?php
defined( 'BASEPATH') OR exit('No direct script access allowed');

class Admin_sku extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('admin_sku_model');

	} 
	public function index()
	{

		$data = array('title' => 'SKU',
						'Isi' => 'admin/admin_sku');
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/admin_sku',$data);
		
		
	}
	public function data_user(){
		$date=$this->input->post('date');
		$data = array('title' => 'SKU',
						'Isi' => 'admin/admin_sku');
		$this->load->library('session');
		$username=$this->session->userdata['username'];
		$data['username']=$username;
		if(substr($username,0,2)=='rt'){
		$data['rt']=substr($username,2,3);
		$data['rw']=substr($username,5,3);
		$data['kelurahan']=substr($username,8);
		$tb='skus';
		$this->load->model('Admin_sku_model');
		$data['data_user'] = $this->Admin_sku_model->data_user($tb,$date);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/admin_sku',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
		else if(substr($username,0,2)=='rw'){
		$data['rw']=substr($username,2,3);
		$data['kelurahan']=substr($username,5);
		$tb='skus';
		$this->load->model('Admin_sku_model');
		$data['data_user'] = $this->Admin_sku_model->data_user($tb,$date);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_sku_rw',$data);
		$this->load->view('admin/layout/footer',$data);
		
		}
		else if(substr($username,0)=='admin'){ 
		$data['admin']=substr($username,5);
		$tb='skus';
		$this->load->model('Admin_sku_model');
		$data['data_user'] = $this->Admin_sku_model->get_datas($tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_sku_camat',$data);
		$this->load->view('admin/layout/footer',$data);
		}
		else{
		$data['kelurahan']=substr($username,0);
		$tb='skus';
		$this->load->model('Admin_sku_model');
		$data['data_user'] = $this->Admin_sku_model->data_user($tb,$date);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasi_sku_lurah',$data);
		$this->load->view('admin/layout/footer',$data);
		}	
	}

	public function lihat(){
		$data = array('title' => 'SKU',
						'Isi' => 'admin/admin_sku');
		$id_skus=$this->uri->segment(4);
		$tb='skus';
		$this->load->model('Sku_model');
		$data['data'] = $this->Sku_model->lihat($id_skus,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/lihat_sku',$data);
		$this->load->view('admin/layout/footer',$data);
			
	}
    public function cetak($id){
		$this->load->helper('pdf_helper');
		$tb='skus';
		//$this->load->model('Admin_skdu_model');
		$data=$this->admin_sku_model->cetak($id,$tb);
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
		$obj_pdf->Output('Surat Keterangan Usaha.pdf', 'I');
	}

		public function delete(){
			$id_skus=$this->uri->segment(4);
			$tb='skus';
			$this->load->model('Sku_model');
			$this->Sku_model->deletedata($id_skus,$tb);
			redirect('Admin/Admin_sku/data_user');
		}

	public function legalisasi(){
		$data = array('title' => 'SKU',
						'Isi' => 'admin/admin_sku');
		$id_skus=$this->uri->segment(4);
		$tb='skus';
		$this->load->model('Sku_model');
		$data['data'] = $this->Sku_model->lihat($id_skus,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasisku',$data);
		$this->load->view('admin/layout/footer',$data);
	}
public function legalisasirw(){
		$data = array('title' => 'SKU',
						'Isi' => 'admin/admin_sku');
		$id_skus=$this->uri->segment(4);
		$tb='skus';
		$this->load->model('Sku_model');
		$data['data'] = $this->Sku_model->lihat($id_skus,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiskurw',$data);
		$this->load->view('admin/layout/footer',$data);
	}
	public function legalisasilurah(){
		$data = array('title' => 'SKU',
						'Isi' => 'admin/admin_sku');
		$id_skus=$this->uri->segment(4);
		$tb='skus';
		$this->load->model('Sku_model');
		$data['data'] = $this->Sku_model->lihat($id_skus,$tb);

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiskulurah',$data);
		$this->load->view('admin/layout/footer',$data);
	}
	public function legalisasicamat(){
		$data = array('title' => 'SKU',
						'Isi' => 'admin/admin_sku');
		$id_skus=$this->uri->segment(4);
		$tb='skus';
		$this->load->model('Sku_model');
		$data['data'] = $this->Sku_model->lihat($id_skus,$tb);
        
//        $db=$this->load->database('no_hp,TRUE');
//        $db->select('*');
//        $db->from('data_penduduk');
//        $db->where('data_penduduk.no_hp', $no_hp);
//        $query=$db->get();

		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/legalisasiskucamat',$data);
		$this->load->view('admin/layout/footer',$data);
	}
	}
