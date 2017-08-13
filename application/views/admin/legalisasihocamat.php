<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel"style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i>Legalisasi HO</h4>
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
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_ho/updatelegalcamat');?>"> 
       <!-- text input -->
       <input  name="id_siho" type="hidden" class="form-control"  value="<?php echo $row['id_siho'];?>">
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
        <label>Kewarganegaaran</label>
        <input  name="kewarganegaraan" type="text" class="form-control"  value="<?php echo $row['kewarganegaraan'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Agama</label>
        <input  name="agama" type="text" class="form-control"  value="<?php echo $row['agama'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Pekerjaan</label>
        <input  name="pekerjaan" type="text" class="form-control"  value="<?php echo $row['pekerjaan'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input  name="alamat" type="text" class="form-control"  value="<?php echo $row['alamat'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Nama Yayasan</label>
        <input  name="nama_yayasan" type="text" class="form-control"  value="<?php echo $row['nama_yayasan'];?>" readonly>
      </div>
       <div class="form-group">
        <label>Akta Pendirian Yayasan</label>
        <input  name="akta_pendirian_yayasan" type="text" class="form-control"  value="<?php echo $row['akta_pendirian_yayasan'];?>" readonly>
      </div>
        <div class="form-group">
        <label>File RT</label><br>
        <a href="<?php echo base_url('/uploads/HO/SuratRT/'.$row['file_rt']); ?>">
          <img src="<?php echo base_url('/uploads/HO/SuratRT/'.$row['file_rt']); ?>" height="100px">
          </a>
        <input  name="file_rw" type="text" class="form-control"  value="<?php echo $row['file_rw'];?>" disabled>
      </div>
          
      <div class="form-group">
        <label>File RW</label><br>
        <a href="<?php echo base_url('/uploads/HO/SuratRW/'.$row['file_rw']); ?>">
          <img src="<?php echo base_url('/uploads/HO/SuratRW/'.$row['file_rw']); ?>" height="100px">
          </a>
        <input  name="file_rw" type="text" class="form-control"  value="<?php echo $row['file_rw'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Fotocopy KTP</label><br/>
       <a href="<?php echo base_url('/uploads/HO/KTP/'.$row['file_ktp']); ?>">
          <img src="<?php echo base_url('/uploads/HO/KTP/'.$row['file_ktp']); ?>" height="100px">
          </a>
        <input  name="file_ktp" type="text" class="form-control"  value="<?php echo $row['file_ktp'];?>" disabled>
       </div>
      <div class="form-group">
        <label>Fotocopy Akta Pendirian Perusahaan</label><br/>
        <a href="<?php echo base_url('/uploads/HO/akte/'.$row['file_akte']); ?>">
          <img src="<?php echo base_url('/uploads/HO/akte/'.$row['file_akte']); ?>" height="100px">
          </a>
        <input  name="file_akte" type="text" class="form-control"  value="<?php echo $row['file_akte'];?>" disabled>
       </div>
      <div class="form-group">
        <a href="<?php echo base_url('/uploads/HO/BuktiTanah/'.$row['file_bukti_tanah']); ?>">
          <img src="<?php echo base_url('/uploads/HO/BuktiTanah/'.$row['file_bukti_tanah']); ?>" height="100px">
          </a>
        <input  name="file_bukti_tanah" type="text" class="form-control"  value="<?php echo $row['file_bukti_tanah'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Fotocopy IMB</label><br/>
        <a href="<?php echo base_url('/uploads/HO/imb/'.$row['file_imb']); ?>">
          <img src="<?php echo base_url('/uploads/HO/imb/'.$row['file_imb']); ?>" height="100px">
          </a>
        <input  name="file_imb" type="text" class="form-control"  value="<?php echo $row['file_imb'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Fotocopy Surat Persetujuan Pengelola Lingkungan </label><br/>
        <a href="<?php echo base_url('/uploads/HO/sppl/'.$row['file_sppl']); ?>">
          <img src="<?php echo base_url('/uploads/HO/sppl/'.$row['file_sppl']); ?>" height="100px">
          </a>
        <input  name="file_sppl" type="text" class="form-control"  value="<?php echo $row['file_sppl'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Fotocopy Surat Keterangan Domisili Usaha</label><br/>
        <a href="<?php echo base_url('/uploads/HO/skdu/'.$row['file_skdu']); ?>">
          <img src="<?php echo base_url('/uploads/HO/skdu/'.$row['file_skdu']); ?>" height="100px">
          </a>
        <input  name="file_skdu" type="text" class="form-control"  value="<?php echo $row['file_skdu'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Denah Petunjuk Lokasi</label><br/>
        <a href="<?php echo base_url('/uploads/HO/denah/'.$row['foto_denah']); ?>">
          <img src="<?php echo base_url('/uploads/HO/denah/'.$row['foto_denah']); ?>" height="100px">
          </a>
        <input  name="foto_denah" type="text" class="form-control"  value="<?php echo $row['foto_denah'];?>" disabled>
          </div>
      <div class="form-group">
        <label>Foto Depan Bangunan</label><br/>
        <a href="<?php echo base_url('/uploads/HO/foto depan/'.$row['foto_depan']); ?>">
          <img src="<?php echo base_url('/uploads/HO/foto depan/'.$row['foto_depan']); ?>" height="100px">
          </a>
        <input  name="foto_depan" type="text" class="form-control"  value="<?php echo $row['foto_depan'];?>" disabled>
          </div>
      <div class="form-group">
        <label>File Persetujuan Warga</label><br/>
        <a href="<?php echo base_url('/uploads/HO/persetujuan/'.$row['file_persetujuan']); ?>">
          <img src="<?php echo base_url('/uploads/HO/persetujuan/'.$row['file_persetujuan']); ?>" height="100px">
          </a>
        <input  name="file_persetujuan" type="text" class="form-control"  value="<?php echo $row['file_persetujuan'];?>" disabled>
     </div>
      <div class="form-group">
        <label>File PBB</label><br/>
         <a href="<?php echo base_url('/uploads/HO/pbb/'.$row['file_pbb']); ?>">
          <img src="<?php echo base_url('/uploads/HO/pbb/'.$row['file_pbb']); ?>" height="100px">
          </a>
        <input  name="file_pbb" type="text" class="form-control"  value="<?php echo $row['file_pbb'];?>" disabled>
    </div>
      <div class="form-group">
      <label>Legalisasi</label>
      <p>
      <input type="radio"  id="legalisasi_lurah" name="legalisasi_lurah" value="Y" checked> Ya
      <input type="radio"  id="legalisasi_lurah" name="legalisasi_lurah" value="X"> Tidak
      </p>

      </div>
      <p>
        <input type='submit' value='Simpan' id='submit' />
        <input type='reset' value='Kembali' id='reset' onclick=self.history.back()>
        <br />
       </p>


    </form>
    </thead>
  </div>
      </div>
    </section>
</section>