<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ho extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('ho_model');

	} 
	
	
	public function index()
	{
		$data = array('title' => 'Hidder Ordonantie',
                        'Isi' => 'ho');
        $this->load->view('admin/layout/head',$data);
        $this->load->view('header',$data);
        $this->load->view('navuser',$data);
        $this->load->view('ho',$data);
	}
    
	function validasi() {
		$nik = $this->input->post('f1');
		$password = $this->input->post('f2');
		$data = array(
			'nik' => $nik,
			'password' =>$password
			);
		// Berfungsi untuk memanggil fungsi ambil_data pada class login_model
		$cek=$this->ho_model->ambil_data('data_penduduk', $data);
		if($cek->num_rows() == 1) { // Berfungsi untuk mengecek kebenaran data login yang diinput (1 = true)
		$row=$cek->row();
        $this->session->set_userdata('u',$nik);
        $this->session->set_userdata('p',$password);
        $this->session->set_userdata('n',$row->tempat_lahir);
        $this->session->set_userdata('e', $row->tgl_lahir);
        $this->session->set_userdata('i', $row->alamat);
        $this->session->set_userdata('r', $row->rt);
        $this->session->set_userdata('w', $row->rw);
        $this->session->set_userdata('n', $row->kelurahan);
        $this->session->set_userdata('d', $row->id_instansi);
        $this->session->set_userdata('a', $row->kecamatan);
        $this->session->set_userdata('b', $row->agama);
        $this->session->set_userdata('c', $row->status_kawin);
        $this->session->set_userdata('d', $row->pekerjaan);
        $this->session->set_userdata('z', $row->kewarganegaraan);
        $this->session->set_userdata('g', $row->nama);
          redirect('form_ho/data_user/'.$nik);
		}
        else
        { // Jika data yang diinput tidak valid maka akan dialihkan ke view login gagal
		echo "<script>alert('Gagal login: Silahkan cek nik, password !');history.go(-1);</script>";
		}
		}
    
	public function data_user(){
    	
    	$data_pos['nik']=$this->input->post('nik');
    	$data_pos['nama']=$this->input->post('nama');
        $data_pos['tempat_lahir']=$this->input->post('tempat_lahir');
        $data_pos['tgl_lahir']=$this->input->post('tgl_lahir');
        $data_pos['jenis_kelamin']=$this->input->post('jenis_kelamin');
        $data_pos['kewarganegaraan']=$this->input->post('kewarganegaraan');
        $data_pos['agama']=$this->input->post('agama');
        $data_pos['pekerjaan']=$this->input->post('pekerjaan');
        $data_pos['alamat']=$this->input->post('alamat');
        
        $data_pos['tgl_daftar']=date("Y-m-d");
    	$data_pos['nama_yayasan']=$this->input->post('nama_yayasan');
    	$data_pos['akta_pendirian_yayasan']=$this->input->post('akta_pendirian_yayasan');
        $data_pos['lokasi_bangunan'] = $this->input->post('lokasi_bangunan');
        
         
        $config = array(
            'upload_path' => "./uploads/HO/SuratRT",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "1024",
            'max_width' => "1024"
        );
        $this->load->library('upload', $config);
        
        if($this->upload->do_upload('file_rt'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_rt'] = $this->upload->data('file_name');
        }
        
        $configsatu = array(
            'upload_path' => "./uploads/HO/SuratRW",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048"
        );
        $this->upload->initialize($configsatu);
        if($this->upload->do_upload('file_rw'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_rw'] = $this->upload->data('file_name');
        }
        
        
        $configdua = array(
            'upload_path' => "./uploads/HO/akte",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048"
        );
        $this->upload->initialize($configdua);
        if($this->upload->do_upload('file_akte'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_akte'] = $this->upload->data('file_name');
        }
        
        $configtiga = array(
            'upload_path' => "./uploads/HO/BuktiTanah",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048"
        );
        $this->upload->initialize($configtiga);
        if($this->upload->do_upload('file_bukti_tanah'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_bukti_tanah'] = $this->upload->data('file_name');
        }
        
        $configempat = array(
            'upload_path' => "./uploads/HO/PBB",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048"
        );
        $this->upload->initialize($configempat);
        if($this->upload->do_upload('file_pbb'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_pbb'] = $this->upload->data('file_name');
        }
        
        
        $configlima = array(
            'upload_path' => "./uploads/HO/denah",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048"
        );
        $this->upload->initialize($configlima);
        if($this->upload->do_upload('foto_denah'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['foto_denah'] = $this->upload->data('file_name');
        }

    	 $configenam = array(
            'upload_path' => "./uploads/HO/foto depan",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048"
        );
        $this->upload->initialize($configenam);
        if($this->upload->do_upload('foto_depan'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['foto_depan'] = $this->upload->data('file_name');
        }
        
         $configtujuh = array(
            'upload_path' => "./uploads/HO/persetujuan",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048"
        );
        $this->upload->initialize($configtujuh);
        if($this->upload->do_upload('file_persetujuan'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_persetujuan'] = $this->upload->data('file_name');
        }
        
         $configdelapan = array(
            'upload_path' => "./uploads/HO/skdu",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048"
        );
        
        $this->upload->initialize($configdelapan);
        if($this->upload->do_upload('file_skdu'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_skdu'] = $this->upload->data('file_name');
        }
    	
    	
        $configsembilan = array(
            'upload_path' => "./uploads/HO/imb",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048"
        );
        
        $this->upload->initialize($configsembilan);
        if($this->upload->do_upload('file_imb'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_imb'] = $this->upload->data('file_name');
        }
        
        $configsepuluh = array(
            'upload_path' => "./uploads/HO/sppl",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048"
        );
        
        $this->upload->initialize($configsepuluh);
        if($this->upload->do_upload('file_sppl'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_sppl'] = $this->upload->data('file_name');
        }
        
         $configsebelas = array(
            'upload_path' => "./uploads/HO/KTP",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048"
        );
        
        $this->upload->initialize($configsebelas);
        if($this->upload->do_upload('file_ktp'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_ktp'] = $this->upload->data('file_name');
        }
        
    	
        $tb='siho';
        $this->load->model('HO_model');
        $this->HO_model->tambah_data($data_pos,$tb);
        redirect('home/pelayanan/'.$nik);
    	}
	

        }

