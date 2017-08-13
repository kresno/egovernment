<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_skdu extends CI_Controller {


	public function index()
	{

		$data = array('title' => 'SKDU');
		
		$id_skdu=$this->uri->segment(4);
		$tb='skdu';
		$this->load->model('Skdu_model');
		$data['data']=$this->Skdu_model->getdata($id_skdu,$tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/edit_skdu',$data);
		$this->load->view('admin/layout/footer',$data);
		
	}

public function update()
	{
		$id_skdu=$this->input->post('id_skdu');
		$data['id_skdu']=$this->input->post('id_skdu');
		$data['tgl_daftar']=$this->input->post('tgl_daftar');
		$data['nik']=$this->input->post('nik');
		$data['nama_perusahaan']=$this->input->post('nama_perusahaan');
		$data['jenis_usaha']=$this->input->post('jenis_usaha');
		$data['akta_perusahaan']=$this->input->post('akta_perusahaan');
		$data['status_tempat']=$this->input->post('status_tempat');
		$data['luas_tempat']=$this->input->post('luas_tempat');
		$data['alamat_usaha']=$this->input->post('alamat_usaha');
		$data['jumlah_tenaga']=$this->input->post('jumlah_tenaga');
		$data['file_ktp']='ktp'.$nik;
    	$data['file_kk']='kk'.$nik;
    	$data['file_akte']='akte'.$nik;
    	$data['file_pbb']='pbb'.$nik;
    		
		
		$tb='skdu';
		$this->load->model('Skdu_model');
		$this->Skdu_model->editdata($id_skdu,$tb,$data);
		redirect('Admin/Admin_skdu/data_user');
	}


public function updatelegal()
{
	$id_skdu=$this->input->post('id_skdu');
	$data['id_skdu']=$this->input->post('id_skdu');
	$data['legalisasi_rt']=$this->input->post('legalisasi_rt');
	$data['tgl_rt']=date("Y-m-d");

	$tb='skdu';
		$this->load->model('skdu_model');
		$this->skdu_model->editdata($id_skdu,$tb,$data);
		redirect('Admin/Admin_skdu/data_user');
}
public function updatelegalrw()
{
	$id_skdu=$this->input->post('id_skdu');
	$data['id_skdu']=$this->input->post('id_skdu');
	$data['legalisasi_rw']=$this->input->post('legalisasi_rw');
	$data['tgl_rw']=date("Y-m-d");


	$tb='skdu';
		$this->load->model('Skdu_model');
		$this->Skdu_model->editdata($id_skdu,$tb,$data);
		redirect('Admin/Admin_skdu/data_user');
}
public function updatelegallurah()
{
	$id_skdu=$this->input->post('id_skdu');
	$data['id_skdu']=$this->input->post('id_skdu');
	$data['legalisasi_lurah']=$this->input->post('legalisasi_lurah');
	$data['tgl_lurah']=date("Y-m-d");


	$tb='skdu';
		$this->load->model('Skdu_model');
		$this->Skdu_model->editdata($id_skdu,$tb,$data);
		redirect('Admin/Admin_skdu/data_user');
}
public function updatelegalcamat()
{
	$id_skdu=$this->input->post('id_skdu');
	$data['id_skdu']=$this->input->post('id_skdu');
	$data['legalisasi_camat']=$this->input->post('legalisasi_camat');
	$data['tgl_camat']=date("Y-m-d");
    
    $status = $this->input->post('legalisasi_camat'); 
    $no_hp = $this->input->post('no_hp');
    $email = $this->input->post('email');

	$tb='skdu';
		$this->load->model('Skdu_model');
		$this->Skdu_model->editdata($id_skdu,$tb,$data);
    
    require_once(APPPATH.'third_party/PHPMailer-master/PHPMailerAutoload.php');
    
    if($status == 'Y'){
            //artinya berhasil verifikasi
            $userkey = "6drn3m";
            $passkey = "bismillah";
            $nohp = $no_hp;
            $message = "Surat yang anda ajukan telah selesai diproses, silahkan datang ke kecamatan dengan membawa berkas persyaratan yang asli. Terimakasih (Kecamatan Bogor Utara).";
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
        
        } else if($status == 'X' ) {
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
        
		redirect('Admin/Admin_skdu/data_user');
}


}
