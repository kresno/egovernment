 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skk extends CI_Controller {
	
function __construct(){
		parent::__construct();
		$this->load->model('Skk_model');

	} 
	
	
	public function index()
	{
		$data = array('title' => 'Surat Keterangan Kematian', 
                      'Isi' => 'pelayanan');
        $this->load->view('admin/layout/head',$data);
        $this->load->view('header',$data);
        $this->load->view('navuser',$data);
        $this->load->view('skk',$data);
		
	}
	public function validasi() {
		$nik = $this->input->post('f1');
		$password = $this->input->post('f2');
		$data = array(
			'nik' => $nik,
			'password' =>$password
			);

		// Berfungsi untuk memanggil fungsi ambil_data pada class login_model
		$cek=$this->Skk_model->ambil_data('data_penduduk', $data);
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
          redirect('form_skk/data_user/'.$nik);
		}else{ // Jika data yang diinput tidak valid maka akan dialihkan ke view login gagal
		echo "<script>alert('Gagal login: Silahkan cek nik, password !');history.go(-1);</script>";
		}
		}
    
    public function data_user(){
    	$nik=$this->input->post('nik');
    	$data_pos['nik']=$nik;
    	$data_pos['tgl_daftar']=date("Y-m-d");
    	$data_pos['nama']=$this->input->post('nama');
    	$data_pos['jenis_kelamin']=$this->input->post('jenis_kelamin');
    	$data_pos['tgl_lahir']=$this->input->post('tgl_lahir');
    	$data_pos['kewarganegaraan']=$this->input->post('kewarganegaraan');
    	$data_pos['agama']=$this->input->post('agama');
    	$data_pos['tempat_lahir']=$this->input->post('tempat_lahir');
    	$data_pos['tgl_meninggal']=$this->input->post('tgl_meninggal');
    	$data_pos['sebab_meninggal']=$this->input->post('sebab_meninggal');
    	$data_pos['tempat_meninggal']=$this->input->post('tempat_meninggal');
    	$data_pos['nama_saudara']=$this->input->post('nama_saudara');
    	$data_pos['umur_saudara']=$this->input->post('umur_saudara');
    	$data_pos['kewarganegaraan_saudara']=$this->input->post('kewarganegaraan_saudara');
    	$data_pos['pekerjaan']=$this->input->post('pekerjaan');
        $data_pos['alamat_saudara']=$this->input->post('alamat_saudara');
        
       $config = array(
            'upload_path' => "./uploads/SKK/SuratRT",
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
            'upload_path' => "./uploads/SKK/SuratRW",
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
        
    	
    	$tb='skk';
        $this->load->model('Skk_model');
        $this->Skk_model->tambah_data($data_pos,$tb);
        redirect('home/pelayanan/'.$nik);
		}
   
        }

