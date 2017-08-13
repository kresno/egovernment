<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_skl extends CI_Controller {


	public function index()
	{

		$data = array('title' => 'SKL');
		
		$id_skl=$this->uri->segment(4);
		$tb='skl';
		$this->load->model('skl_model');
		$data['data']=$this->skl_model->getdata($id_skl,$tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/edit_skl',$data);
		
	}

public function update()
	{
		$id_skl=$this->input->post('id_skl');
		$data['id_skl']=$this->input->post('id_skl');
		$data['tgl_daftar']=$this->input->post('tgl_daftar');
		$data['nama']=$this->input->post('nama');
    	$data['jenis_kelamin']=$this->input->post('jenis_kelamin');
    	$data['tgl_lahir']=$this->input->post('tgl_lahir');
    	$data['kelahiran']=$this->input->post('kelahiran');
    	$data['tempat_lahir']=$this->input->post('tempat_lahir');
    	$data['penolong_kelahiran']=$this->input->post('penolong_kelahiran');
    	$data['nama_ibu']=$this->input->post('nama_ibu');
    	$data['alamat_ibu']=$this->input->post('alamat_ibu');
        $data['lahir_ibu']=$this->input->post('lahir_ibu');
        $data['agama_ibu']=$this->input->post('agama_ibu');
    	$data['nama_ayah']=$this->input->post('nama_ayah');
    	$data['lahir_ayah']=$this->input->post('lahir_ayah');
    	$data['agama_ayah']=$this->input->post('agama_ayah');
    	$data['pekerjaan']=$this->input->post('pekerjaan');
        $data['kewarganegaraan_ayah']=$this->input->post('kewarganegaraan_ayah');
    	$data['no_ktp']=$this->input->post('no_ktp');
		
		$tb='skl';
		$this->load->model('skl_model');
		$this->skl_model->editdata($id_skl,$tb,$data);
		redirect('Admin/Admin_skl/data_user');
	}


public function updatelegal()
{
	$id_skl=$this->input->post('id_skl');
	$data['id_skl']=$this->input->post('id_skl');
	$data['legalisasi_rt']=$this->input->post('legalisasi_rt');
	$data['tgl_rt']=date("Y-m-d");

	$tb='skl';
		$this->load->model('skl_model');
		$this->skl_model->editdata($id_skl,$tb,$data);
		redirect('Admin/Admin_skl/data_user');
}
public function updatelegalrw()
{
	$id_skl=$this->input->post('id_skl');
	$data['id_skl']=$this->input->post('id_skl');
	$data['legalisasi_rw']=$this->input->post('legalisasi_rw');
	$data['tgl_rw']=date("Y-m-d");

	$tb='skl';
		$this->load->model('skl_model');
		$this->skl_model->editdata($id_skl,$tb,$data);
		redirect('Admin/Admin_skl/data_user');
}
public function updatelegallurah()
{
	$id_skl=$this->input->post('id_skl');
	$data['id_skl']=$this->input->post('id_skl');
	$data['legalisasi_lurah']=$this->input->post('legalisasi_lurah');
	$data['tgl_lurah']=date("Y-m-d");

	$tb='skl';
		$this->load->model('skl_model');
		$this->skl_model->editdata($id_skl,$tb,$data);
		redirect('Admin/Admin_skl/data_user');
}
public function updatelegalcamat()
{
	$id_skl=$this->input->post('id_skl');
	$data['id_skl']=$this->input->post('id_skl');
	$data['legalisasi_camat']=$this->input->post('legalisasi_camat');
	$data['tgl_camat']=date("Y-m-d");
    
    $status = $this->input->post('legalisasi_camat'); 
    $no_hp = $this->input->post('no_hp');
    $email = $this->input->post('email');

	$tb='skl';
		$this->load->model('skl_model');
		$this->skl_model->editdata($id_skl,$tb,$data);
    
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
    
		redirect('Admin/Admin_skl/data_user');
}


}
