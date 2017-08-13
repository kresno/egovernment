<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skdu extends CI_Controller {

	
	function __construct(){
		parent::__construct();
        
		$this->load->model('Skdu_model');

	} 
	
	public function index()
	{
        $data = array('title' => 'Surat Keterangan Domisili Usaha',
                        'Isi' => 'pelayanan');
        $this->load->view('admin/layout/head',$data);
		$this->load->view('headeruser',$data);
		$this->load->view('navuser',$data);
		$this->load->view('skdu',$data);
		
	}
    
    function validasi() {
		$nik = $this->input->post('f1');
		$password = $this->input->post('f2');
		$data = array(
			'nik' => $nik,
			'password' =>$password
			);

		// Berfungsi untuk memanggil fungsi ambil_data pada class login_model
		$cek=$this->Skdu_model->ambil_data('data_penduduk', $data);
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
          redirect('form_skdu/data_user/'.$nik);
		}else{ // Jika data yang diinput tidak valid maka akan dialihkan ke view login gagal
		echo "<script>alert('Gagal login: Silahkan cek nik, password !');history.go(-1);</script>";
		}
		}

    public function data_user(){
    	$nik=$this->input->post('nik');
    	$data_pos['nik']=$nik;
        $data_pos['tgl_daftar']=date("Y-m-d");
    	$data_pos['nama_perusahaan']=$this->input->post('nama_perusahaan');
        $data_pos['penanggung_jawab']=$this->input->post('penanggung_jawab');
    	$data_pos['npwp']=$this->input->post('npwp');
    	$data_pos['akta_perusahaan']=$this->input->post('akta_perusahaan');
    	$data_pos['status_tempat']=$this->input->post('status_tempat');
    	$data_pos['luas_tempat']=$this->input->post('luas_tempat');
    	$data_pos['jumlah_tenaga']=$this->input->post('jumlah_tenaga');
    	$data_pos['alamat_usaha']=$this->input->post('alamat_usaha');
        $data_pos['jenis_usaha']=$this->input->post('jenis_usaha');
     
    	$config = array(
            'upload_path' => "./uploads/SKDU/SuratRT",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048" // Can be set to particular file size , here it is 2 MB(2048 Kb)
        );
        $this->load->library('upload', $config);
        
        if($this->upload->do_upload('file_rt'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_rt'] = $this->upload->data('file_name');
        }
        
        $configsatu = array(
            'upload_path' => "./uploads/SKDU/SuratRW",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048" // Can be set to particular file size , here it is 2 MB(2048 Kb)
        );
        $this->upload->initialize($configsatu);
        if($this->upload->do_upload('file_rw'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_rw'] = $this->upload->data('file_name');
        }
        
        $configdua = array(
            'upload_path' => "./uploads/SKDU/KTP",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048" // Can be set to particular file size , here it is 2 MB(2048 Kb)
        );
        $this->upload->initialize($configdua);
        if($this->upload->do_upload('file_ktp'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_ktp'] = $this->upload->data('file_name');
        }
        
        $configtiga = array(
            'upload_path' => "./uploads/SKDU/KK",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048" // Can be set to particular file size , here it is 2 MB(2048 Kb)
        );
        $this->upload->initialize($configtiga);
        if($this->upload->do_upload('file_kk'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_kk'] = $this->upload->data('file_name');
        }
        
        $configempat = array(
            'upload_path' => "./uploads/SKDU/AktaNotaris",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048" // Can be set to particular file size , here it is 2 MB(2048 Kb)
        );
        $this->upload->initialize($configempat);
        if($this->upload->do_upload('file_akte'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_akte'] = $this->upload->data('file_name');
        }
        
        $configlima = array(
            'upload_path' => "./uploads/SKDU/pbb",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048" // Can be set to particular file size , here it is 2 MB(2048 Kb)
        );
        $this->upload->initialize($configlima);
        if($this->upload->do_upload('file_pbb'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_pbb'] = $this->upload->data('file_name');
        }
        
        $tb='skdu';
        $this->load->model('Skdu_model');
        $this->Skdu_model->tambah_data($data_pos,$tb);
		redirect('home/pelayanan/'.$nik);	
    }
	


    }