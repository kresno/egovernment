<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_ktp extends CI_Controller {


	public function index()
	{

		$data = array('title' => 'ktp');
		
		$id_ktp=$this->uri->segment(4);
		$tb='ktp';
		$this->load->model('ktp_model');
		$data['data']=$this->ktp_model->getdata($id_ktp,$tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/edit_ktp',$data);
}

public function update()
	{
		$id_ktp=$this->input->post('id_ktp');
		$data['tgl_daftar']=$this->input->post('tgl_daftar');
		$data['provinsi']=$this->input->post('provinsi');
		$data['kabupaten']=$this->input->post('kabupaten');
		$data['kecamatan']=$this->input->post('kecamatan');
		$data['kelurahan']=$this->input->post('kelurahan');
		$data['nama']=$this->input->post('nama');
		$data['permohonan_ktp']=$this->input->post('permohonan_ktp');
		$data['file_foto']=$this->input->post('file_foto');
		$data['file_kk']=$this->input->post('file_kk');
		$tb='ktp';
		$this->load->model('ktp_model');
		$this->ktp_model->editdata($id_ktp,$tb,$data);
		redirect('Admin/Admin_ktp/data_user');
	}


public function updatelegal()
{
	$id_ktp=$this->input->post('id_ktp');
	$data['id_ktp']=$this->input->post('id_ktp');
	$data['legalisasi_rt']=$this->input->post('legalisasi_rt');
	$data['tgl_rt']=date("Y-m-d");

	$tb='ktp';
		$this->load->model('ktp_model');
		$this->ktp_model->editdata($id_ktp,$tb,$data);
		redirect('Admin/Admin_ktp/data_user');
}
public function updatelegalrw()
{
	$id_ktp=$this->input->post('id_ktp');
	$data['id_ktp']=$this->input->post('id_ktp');
	$data['legalisasi_rw']=$this->input->post('legalisasi_rw');
	$data['tgl_rt']=date("Y-m-d");
	

	$tb='ktp';
		$this->load->model('ktp_model');
		$this->ktp_model->editdata($id_ktp,$tb,$data);
		redirect('Admin/Admin_ktp/data_user');
}
public function updatelegallurah()
{
	$id_ktp=$this->input->post('id_ktp');
	$data['id_ktp']=$this->input->post('id_ktp');
	$data['legalisasi_lurah']=$this->input->post('legalisasi_lurah');
	$data['tgl_rt']=date("Y-m-d");
	

	$tb='ktp';
		$this->load->model('ktp_model');
		$this->ktp_model->editdata($id_ktp,$tb,$data);
		redirect('Admin/Admin_ktp/data_user');
}
public function updatelegalcamat()
{
	$id_ktp=$this->input->post('id_ktp');
	$data['id_ktp']=$this->input->post('id_ktp');
	$data['legalisasi_camat']=$this->input->post('legalisasi_camat');
	$data['tgl_rt']=date("Y-m-d");
	
    $status = $this->input->post('legalisasi_camat'); 
    $no_hp = $this->input->post('no_hp');
    $email = $this->input->post('email');

	$tb='ktp';
		$this->load->model('ktp_model');
		$this->ktp_model->editdata($id_ktp,$tb,$data);
    
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
                <p>Surat yang anda ajukan tidak dapat dilegalisasi karena ada persyaratan yang tidak memenuhu syarat, silahkan datang ke kecamatan dengan membawa berkas persyaratan yang asli . Terimakasih.</p><br>
                <p>Hormat Kami</p>
                <p>Admin</p>
                </body>
                </html>
            ';

            $mail->Send();
        }
    
    
		redirect('Admin/Admin_ktp/data_user');
}


}
