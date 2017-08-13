<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sku extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Sku_model');

	} 
	
	public function index()
	{
		$data = array('title' => 'Surat Keterangan Usaha', 
                      'Isi' => 'pelayanan' );
		$this->load->view('header',$data);
		$this->load->view('navuser',$data);
		$this->load->view('sku',$data);
		
	}
	function validasi() {
		$nik = $this->input->post('f1');
		$password = $this->input->post('f2');
		$data = array(
			'nik' => $nik,
			'password' =>$password
			);

		// Berfungsi untuk memanggil fungsi ambil_data pada class login_model
		$cek=$this->Sku_model->ambil_data('data_penduduk', $data);
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
          redirect('form_sku/data_user/'.$nik);
		}else{ // Jika data yang diinput tidak valid maka akan dialihkan ke view login gagal
		echo "<script>alert('Gagal login: Silahkan cek nik, password !');history.go(-1);</script>";
		}
		}

    public function data_user(){
    	$nik=$this->input->post('nik');
    	$data_pos['nik']=$nik;
    	$data_pos['tgl_daftar']=date("Y-m-d");
    	$data_pos['nama_perusahaan']=$this->input->post('nama_perusahaan');
    	$data_pos['jenis_usaha']=$this->input->post('jenis_usaha');
		$data_pos['alamat_usaha']=$this->input->post('alamat_usaha');

		$config = array(
            'upload_path' => "./uploads/SKU/SuratRT",
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
            'upload_path' => "./uploads/SKU/SuratRW",
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
            'upload_path' => "./uploads/SKU/KTP",
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
            'upload_path' => "./uploads/SKU/pbb",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048" // Can be set to particular file size , here it is 2 MB(2048 Kb)
           
        );
        $this->upload->initialize($configtiga);
        if($this->upload->do_upload('file_pbb'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_pbb'] = $this->upload->data('file_name');
        }

    		
		$tb='skus';
		$this->load->model('Sku_model');
    	$this->Sku_model->tambah_data($data_pos,$tb);
    	redirect('home/pelayanan/'.$nik);

    }
        }



