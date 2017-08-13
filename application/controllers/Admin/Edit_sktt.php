<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_sktt extends CI_Controller {


	public function index()
	{

		$data = array('title' => 'SKTT');
		
		$id_sktt=$this->uri->segment(4);
		$tb='sktt';
		$this->load->model('Sktt_model');
		$data['data']=$this->Sktt_model->getdata($id_sktt,$tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/edit_sktt',$data);
		
	}

public function update()
	{
		$id_sktts=$this->input->post('id_sktt');
		$data['id_sktt']=$this->input->post('id_sktt');
		$data['tgl_daftar']=$this->input->post('tgl_daftar');
		$data['nik']=$this->input->post('nik');
		$data['tgl_rt']=$this->input->post('tgl_rt');
		$data['tgl_rw']=$this->input->post('tgl_rw');
		$data['tgl_lurah']=$this->input->post('tgl_lurah');
		$data['tgl_camat']=$this->input->post('tgl_camat');
		$data['pekerjaan']=$this->input->post('pekerjaan');
		$data['alamat']=$this->input->post('alamat');
		$data['file_ktp']=$this->input->post('file_ktp');
		$data['file_kk']=$this->input->post('file_kk');
		
		$tb='sktt';
		$this->load->model('sktt_model');
		$this->sktt_model->editdata($id_sktt,$tb,$data);
		redirect('Admin/Admin_sktt/data_user');
	}


public function updatelegal()
{
	$id_sktt=$this->input->post('id_sktt');
	$data['id_sktt']=$this->input->post('id_sktt');
	$data['legalisasi_rt']=$this->input->post('legalisasi_rt');
	$data['tgl_rt']=date("Y-m-d");
	$tb='sktt';
		$this->load->model('sktt_model');
		$this->sktt_model->editdata($id_sktt,$tb,$data);
		redirect('Admin/Admin_sktt/data_user');
}
public function updatelegalrw()
{
	$id_sktt=$this->input->post('id_sktt');
	$data['id_sktt']=$this->input->post('id_sktt');
	$data['legalisasi_rw']=$this->input->post('legalisasi_rw');
	$data['tgl_rw']=date("Y-m-d");

	$tb='sktt';
		$this->load->model('sktt_model');
		$this->sktt_model->editdata($id_sktt,$tb,$data);
		redirect('Admin/Admin_sktt/data_user');
}
public function updatelegallurah()
{
	$id_sktt=$this->input->post('id_sktt');
	$data['id_sktt']=$this->input->post('id_sktt');
	$data['legalisasi_lurah']=$this->input->post('legalisasi_lurah');
	$data['tgl_lurah']=date("Y-m-d");
	$tb='sktt';
		$this->load->model('sktt_model');
		$this->sktt_model->editdata($id_sktt,$tb,$data);
		redirect('Admin/Admin_sktt/data_user');
}
public function updatelegalcamat()
{
	$id_sktt=$this->input->post('id_sktt');
	$data['id_sktt']=$this->input->post('id_sktt');
	$data['legalisasi_camat']=$this->input->post('legalisasi_camat');
	$data['tgl_camat']=date("Y-m-d");
    
    $status = $this->input->post('legalisasi_camat'); 
    $no_hp = $this->input->post('no_hp');
    $email = $this->input->post('email');
	
    $tb='sktt';
    $this->load->model('sktt_model');
	$this->sktt_model->editdata($id_sktt,$tb,$data);
    
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
    
                //
    
		redirect('Admin/Admin_sktt/data_user');
}


}
