<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_skk extends CI_Controller {


	public function index(){
		$data = array('title' => 'SKK');
		$id_skk=$this->uri->segment(4);
		$tb='skk';
		$this->load->model('skk_model');
		$data['data']=$this->skk_model->getdata($id_skk,$tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/edit_skk',$data);	
	}

	public function update(){
		$id_skk=$this->input->post('id_skk');
		$data['id_skk']=$this->input->post('id_skk');
		$data['tgl_daftar']=$this->input->post('tgl_daftar');
		$data['nama']=$this->input->post('nama');
		$data['jenis_kelamin']=$this->input->post('jenis_kelamin');
		$data['tempat_lahir']=$this->input->post('tempat_lahir');
		$data['tgl_lahir']=$this->input->post('tgl_lahir');
		$data['kewarganegaraan']=$this->input->post('kewarganegaraan');
		$data['agama']=$this->input->post('agama');
		$data['tgl_meninggal']=$this->input->post('tgl_meninggal');
		$data['sebab_meninggal']=$this->input->post('sebab_meninggal');
		$data['tempat_meninggal']=$this->input->post('tempat_meninggal');
		$data['nama_saudara']=$this->input->post('nama_saudara');
		$data['umur_saudara']=$this->input->post('umur_saudara');
		$data['kewarganegaraan_saudara']=$this->input->post('kewarganegaraan_saudara');
		$data['pekerjaan']=$this->input->post('pekerjaan');
		$data['alamat_saudara']=$this->input->post('alamat_saudara');
		
		$tb='skk';
		$this->load->model('skk_model');
		$this->skk_model->editdata($id_skk,$tb,$data);
		redirect('Admin/Admin_skk/data_user');
	}

	public function updatelegal()
	{
		$id_skk=$this->input->post('id_skk');
		$data['id_skk']=$this->input->post('id_skk');
		$data['legalisasi_rt']=$this->input->post('legalisasi_rt');
		$data['tgl_rt']=date("Y-m-d");
		$tb='skk';
		$this->load->model('skk_model');
		$this->skk_model->editdata($id_skk,$tb,$data);
		redirect('Admin/Admin_skk/data_user');
	}
	public function updatelegalrw()
	{
		$id_skk=$this->input->post('id_skk');
		$data['id_skk']=$this->input->post('id_skk');
		$data['legalisasi_rw']=$this->input->post('legalisasi_rw');
		$data['tgl_rw']=date("Y-m-d");
		$tb='skk';
		$this->load->model('skk_model');
		$this->skk_model->editdata($id_skk,$tb,$data);
		redirect('Admin/Admin_skk/data_user');
	}
	public function updatelegallurah()
	{
		$id_skk=$this->input->post('id_skk');
		$data['id_skk']=$this->input->post('id_skk');
		$data['legalisasi_lurah']=$this->input->post('legalisasi_lurah');
		$data['tgl_lurah']=date("Y-m-d");
		$tb='skk';
		$this->load->model('skk_model');
		$this->skk_model->editdata($id_skk,$tb,$data);
		redirect('Admin/Admin_skk/data_user');
	}
	public function updatelegalcamat()
	{
		$id_skk=$this->input->post('id_skk');
		$data['id_skk']=$this->input->post('id_skk');
		$data['legalisasi_camat']=$this->input->post('legalisasi_camat');
		$data['tgl_camat']=date("Y-m-d");
        
         $status = $this->input->post('legalisasi_camat'); 
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');

        
		$tb='skk';
		$this->load->model('skk_model');
		$this->skk_model->editdata($id_skk,$tb,$data);
        
         require_once(APPPATH.'third_party/PHPMailer-master/PHPMailerAutoload.php');
        
        if($status == 'Y'){
            //artinya berhasil verifikasi
            $userkey = "6drn3m";
            $passkey = "bismillah";
            $nohp = $no_hp;
            $message = "Surat yang anda ajukan telah selesai diproses, silahkan datang ke kecamatan dengan membawa berkas persyaratan yang asli. Terimakasih.";
            $url = "https://reguler.zenziva.net/apps/smsapi.php";
            $curlHandle = curl_init();
            curl_setopt($curlHandle, CURLOPT_URL, $url);
            curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$nohp.'&pesan='.urlencode($message));
            curl_setopt($curlHandle, CURLOPT_HEADER, 0);
            curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
            curl_setopt($curlHandle, CURLOPT_POST, 1);
            $results = curl_exec($curlHandle);
            curl_close($curlHandle);
        
            $mail = new PHPMailer();
            $destino = $email; //email tujuan
            $mail->AddAddress($destino, "Receiver");
            $mail->IsSMTP(); // we are going to use SMTP
            $mail->SMTPAuth   = true; // enabled SMTP authentication
            $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
            $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
            $mail->Port       = 465;                   // SMTP port to connect to GMail
            $mail->Username   = "kecbogor@gmail.com";  // user email address
            $mail->Password   = "*30januari*";            // password in GMail
            $mail->SetFrom('kecbogor@gmail.com', 'Mail');  //Who is sending 
            $mail->isHTML(true);
            $mail->Subject    = "PROGRESS PENGAJUAN SURAT";
            $mail->Body      = '
                <html>
                <head>
                    <title>Pemberitahuan Kecamatan</title>
                </head>
                <body>
                <h3>TERIMAKASIH</h3>
                <p>Surat yang anda ajukan telah selesai diproses, silahkan datang ke kecamatan dengan membawa berkas persyaratan yang asli. Terimakasih.</p><br>
                <p>Hormat Kami</p>
                <p>Admin</p>
                </body>
                </html>
            ';

            $mail->Send();
        
        } else if($status == 'N' ) {
            //artinya gagal verifikasi
            $userkey = "6drn3m";
            $passkey = "bismillah";
            $nohp = $no_hp  ;
            $message = "Surat yang anda ajukan tidak dapat dilegalisasi karena ada persyaratan yang tidak memenuhu syarat, silahkan datang ke kecamatan dengan membawa berkas persyaratan yang asli . Terimakasih.";
            $url = "https://reguler.zenziva.net/apps/smsapi.php";
            $curlHandle = curl_init();
            curl_setopt($curlHandle, CURLOPT_URL, $url);
            curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$nohp.'&pesan='.urlencode($message));
            curl_setopt($curlHandle, CURLOPT_HEADER, 0);
            curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
            curl_setopt($curlHandle, CURLOPT_POST, 1);
            $results = curl_exec($curlHandle);
            curl_close($curlHandle);
        
            $mail = new PHPMailer();
            $destino = $email; //email tujuan
            $mail->AddAddress($destino, "Receiver");
            $mail->IsSMTP(); // we are going to use SMTP
            $mail->SMTPAuth   = true; // enabled SMTP authentication
            $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
            $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
            $mail->Port       = 465;                   // SMTP port to connect to GMail
            $mail->Username   = "kecbgrutara@gmail.com";  // user email address
            $mail->Password   = "*30januari*";            // password in GMail
            $mail->SetFrom('kecbogor@gmail.com', 'Mail');  //Who is sending 
            $mail->isHTML(true);
            $mail->Subject    = "PROGRESS PENGAJUAN SURAT";
            $mail->Body      = '
                <html>
                <head>
                    <title>Pemberitahuan Kecamatan</title>
                </head>
                <body>
                <h3>TERIMAKASIH</h3>
                <p>Surat yang anda ajukan tidak dapat dilegalisasi karena ada persyaratan yang tidak memenuhu syarat, silahkan datang ke kecamatan dengan membawa berkas persyaratan yang asli . Terimakasih.</p><br>
                <p>Hormat Kami</p>
                <p>Admin</p>
                </body>
                </html>
            ';

            $mail->Send();
        }
                //
        
		redirect('Admin/Admin_skk/data_user');
	}
}
