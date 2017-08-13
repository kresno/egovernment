<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ktp extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('Ktp_model');

	} 
	
	public function index()
	{
		$data = array('title' => 'Kecamatan Bogor Utara',
                        'Isi' => 'ktp');
        $this->load->view('admin/layout/head',$data);
        $this->load->view('header',$data);
        $this->load->view('navuser',$data);
        $this->load->view('ktp',$data);
		
	}

    public function validasi() {
		$nik = $this->input->post('f1');
		$password = $this->input->post('f2');
		$data = array(
			'nik' => $nik,
			'password' =>$password
			);

		// Berfungsi untuk memanggil fungsi ambil_data pada class login_model
		$cek=$this->Ktp_model->ambil_data('data_penduduk', $data);
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
          redirect('form_ktp/data_user/'.$nik);
		}else{ // Jika data yang diinput tidak valid maka akan dialihkan ke view login gagal
		echo "<script>alert('Gagal login: Silahkan cek nik, password !');history.go(-1);</script>";
		}
		}

public function data_user(){
   $nik=$this->input->post('nik');
   $data_pos['nik']=$nik;
   $data_pos['tgl_daftar']=date("Y-m-d");
   $data_pos['provinsi']=$this->input->post('provinsi');
   $data_pos['kabupaten']=$this->input->post('kabupaten');
   $data_pos['kelurahan']=$this->input->post('kelurahan');
   $data_pos['kecamatan']=$this->input->post('kecamatan');
   $data_pos['nama']=$this->input->post('nama');
   $data_pos['alamat']=$this->input->post('alamat');
   $data_pos['file_kk']=$this->input->post('file_kk');
   $data_pos['file_foto']='foto'.$nik;
   $data_pos['file_kk']='kk'.$nik;
   $data_pos['file_rt']='rt'.$nik;
   $data_pos['file_rw']='rw'.$nik;
    
   $config = array(
            'upload_path' => "./uploads/KTP/SuratRT",
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
            'upload_path' => "./uploads/KTP/SuratRW",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "1024",
            'max_width' => "1024"
        );
        $this->upload->initialize($configsatu);
        if($this->upload->do_upload('file_rw'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_rw'] = $this->upload->data('file_name');
        }
        
        
        
         $configdua = array(
            'upload_path' => "./uploads/KTP/FOTO",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "1024",
            'max_width' => "1024"
        );
        $this->upload->initialize($configdua);
        if($this->upload->do_upload('file_foto'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_foto'] = $this->upload->data('file_name');
        }
        
        $configtiga = array(
            'upload_path' => "./uploads/KTP/KK",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "1024",
            'max_width' => "1024"
        );
        $this->upload->initialize($configtiga);
        if($this->upload->do_upload('file_kk'))
        {
            $data = array('upload_data' => $this->upload->data());
            $data_pos['file_kk'] = $this->upload->data('file_name');
        }
$tb='ktp';
$this->load->model('ktp_model');
$this->ktp_model->tambah_data($data_pos,$tb);
redirect('home/pelayanan/'.$nik);
}

 }


