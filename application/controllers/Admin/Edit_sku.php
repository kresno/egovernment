<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_sku extends CI_Controller {


	public function index()
	{

		$data = array('title' => 'SKU');
		
		$id_skus=$this->uri->segment(4);
		$tb='skus';
		$this->load->model('Sku_model');
		$data['data']=$this->Sku_model->getdata($id_skus,$tb);
		$this->load->view('admin/layout/head',$data);
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/edit_sku',$data);
		$this->load->view('admin/layout/footer',$data);
		
	}

public function update()
	{
		$id_skus=$this->input->post('id_skus');
		$data['id_skus']=$this->input->post('id_skus');
		$data['tgl_daftar']=$this->input->post('tgl_daftar');
		$data['nik']=$this->input->post('nik');
		$data['tgl_daftar']=$this->input->post('tgl_daftar');
		$data['jenis_usaha']=$this->input->post('jenis_usaha');
		$data['alamat']=$this->input->post('alamat');
		$data['file_ktp']='file_ktp.jpg';
		$data['file_pbb']='file_pbb.jpg';

		

    	$config['upload_path']		= './uploads/SKU/';
	    $config['allowed_types']	= 'jpg|jpeg|png';
    	$config['max_size']			= '2024';
    	$this->load->library('upload',$config);
    	{
    		if ($this->upload->do_upload('file_ktp')) {
            $data['file_ktp'] =  $this->upload->data('file_name');
    	}
    
    	$config1['upload_path']		= './uploads/SKU/';
	    $config1['allowed_types']	= 'jpg|jpeg|png';
    	$config1['max_size']			= '2024';
    	$this->load->library('upload',$config);
		{
    		if ($this->upload->do_upload('file_pbb')) {
            $data['file_pbb'] =  $this->upload->data('file_name');
    	}
    		
		$tb='skus';
		$this->load->model('Sku_model');
    	$this->Sku_model->tambah_data($data,$tb);
    	redirect('form_sku/data_user/'.$nik);

    }
}
		$tb='skus';
		$this->load->model('Sku_model');
		$this->Sku_model->editdata($id_skus,$tb,$data);
		redirect('Admin/Admin_sku/data_user');
	}


public function updatelegal()
{
	$id_skus=$this->input->post('id_skus');
	$data['id_skus']=$this->input->post('id_skus');
	$data['legalisasi_rt']=$this->input->post('legalisasi_rt');
	$data['tgl_rt']=date("Y-m-d");
	$tb='skus';
		$this->load->model('Sku_model');
		$this->Sku_model->editdata($id_skus,$tb,$data);
		redirect('Admin/Admin_sku/data_user');
}
public function updatelegalrw()
{
	$id_skus=$this->input->post('id_skus');
	$data['id_skus']=$this->input->post('id_skus');
	$data['legalisasi_rw']=$this->input->post('legalisasi_rw');
	$data['tgl_rw']=date("Y-m-d");

	$tb='skus';
		$this->load->model('Sku_model');
		$this->Sku_model->editdata($id_skus,$tb,$data);
		redirect('Admin/Admin_sku/data_user');
}
public function updatelegallurah()
{
	$id_skus=$this->input->post('id_skus');
	$data['id_skus']=$this->input->post('id_skus');
	$data['legalisasi_lurah']=$this->input->post('legalisasi_lurah');
	$data['tgl_lurah']=date("Y-m-d");

	$tb='skus';
		$this->load->model('Sku_model');
		$this->Sku_model->editdata($id_skus,$tb,$data);
		redirect('Admin/Admin_sku/data_user');
}
public function updatelegalcamat()
{
	$id_skus=$this->input->post('id_skus');
	$data['id_skus']=$this->input->post('id_skus');
	$data['legalisasi_camat']=$this->input->post('legalisasi_camat');
	$data['tgl_camat']=date("Y-m-d");

    $status = $this->input->post('legalisasi_camat'); 
    $no_hp = $this->input->post('no_hp');
    $email = $this->input->post('email');

	$tb='skus';
		$this->load->model('Sku_model');
		$this->Sku_model->editdata($id_skus,$tb,$data);
    
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
    
    
		redirect('Admin/Admin_sku/data_user');
}


}
