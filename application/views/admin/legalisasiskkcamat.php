<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel"style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i> Edit SKK</h4>
                            <hr>
                                <thead>
                               
      
      <?php
      foreach ($data as $row) 
      $nik = $row['nik'];
      
      $this->db->where('nik',$nik);
      $cek=$this->db->get('data_penduduk');
      foreach($cek->result_array() as $results){
          $no_hp = $results['no_hp'];
          $email = $results['email'];
      }
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_skk/updatelegalcamat');?>"> 
       <!-- text input -->
       <input  name="id_skk" type="hidden" class="form-control"  value="<?php echo $row['id_skk'];?>" readonly>
        <input  name="no_hp" type="hidden" class="form-control"  value="<?php echo $no_hp;?>">
       <input  name="email" type="hidden" class="form-control"  value="<?php echo $email;?>">
       <div class="form-group">
        <label>Tanggal Daftar</label>
        <input  name="tgl_daftar" type="text" class="form-control"  value="<?php echo $row['tgl_daftar'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Nama</label>
        <input  name="nama" type="text" class="form-control"  value="<?php echo $row['nama'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Tempat Lahir</label>
        <input  name="tempat_lahir" type="text" class="form-control"  value="<?php echo $row['tempat_lahir'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input  name="tgl_lahir" type="text" class="form-control"  value="<?php echo $row['tgl_lahir'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <input  name="jenis_kelamin" type="text" class="form-control"  value="<?php echo $row['jenis_kelamin'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Kewarganegaraan</label>
        <input  name="kewarganegaraan" type="text" class="form-control"  value="<?php echo $row['kewarganegaraan'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Agama</label>
        <input  name="agama" type="text" class="form-control"  value="<?php echo $row['agama'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Kewarganegaraan</label>
        <input  name="kewarganegaraan" type="text" class="form-control"  value="<?php echo $row['kewarganegaraan'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Tanggal Meninggal Dunia</label>
        <input  name="tgl_meninggal" type="text" class="form-control"  value="<?php echo $row['tgl_meninggal'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Sebab Meninggal Dunia</label>
        <input  name="sebab_meninggal" type="text" class="form-control"  value="<?php echo $row['sebab_meninggal'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Tempat Meninggal Dunia</label>
        <input  name="tempat_meninggal" type="text" class="form-control"  value="<?php echo $row['tempat_meninggal'];?>" readonly>
      </div><br>
     <h4>KELUARGA YANG DITINGGALKAN</h4> <br>
      <div class="form-group">
        <label>Nama</label>
        <input  name="nama_saudara" type="text" class="form-control"  value="<?php echo $row['nama_saudara'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Umur</label>
        <input  name="umur_saudara" type="text" class="form-control"  value="<?php echo $row['umur_saudara'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Pekerjaan saudara</label>
        <input  name="pekerjaan" type="text" class="form-control"  value="<?php echo $row['pekerjaan'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Alamat_saudara</label>
        <input  name="alamat_saudara" type="text" class="form-control"  value="<?php echo $row['alamat_saudara'];?>" readonly>
      </div>
      <div class="form-group">
        <label>File RT</label><br>
        <a href="<?php echo base_url('/uploads/SKK/SuratRT/'.$row['file_rt']); ?>">
          <img src="<?php echo base_url('/uploads/SKK/SuratRT/'.$row['file_rt']); ?>" height="100px">
          </a>
        <input  name="file_rw" type="text" class="form-control"  value="<?php echo $row['file_rt'];?>" disabled>
      </div>
          
      <div class="form-group">
        <label>File RW</label><br>
        <a href="<?php echo base_url('/uploads/SKK/SuratRW/'.$row['file_rw']); ?>">
          <img src="<?php echo base_url('/uploads/SKK/SuratRW/'.$row['file_rw']); ?>" height="100px">
          </a>
        <input  name="file_rw" type="text" class="form-control"  value="<?php echo $row['file_rw'];?>" disabled>
      </div>
      <div class="form-group">
      <label>Legalisasi</label>
      <p>
      <input type="radio"  id="legalisasi_camat" name="legalisasi_camat" value="Y" checked> Ya
      <input type="radio"  id="legalisasi_camat" name="legalisasi_camat" value="X"> Tidak</p>
          <?php
$userkey = "f7bp05";
$passkey = "123";
$nohp = "089692409214";
$message = "test";
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
?>
</div>
      <p>
        <input type='submit' value='Simpan' id='submit' />
        <input type='reset' value='Batal' id='reset' onclick=self.history.back()>
                  <br />
                </p>


    </form>
    </thead>
  </div>
      </div>
    </section>
</section>