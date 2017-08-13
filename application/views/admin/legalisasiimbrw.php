<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel"style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i> Verifikasi IMB</h4>
                            <hr>
                                <thead>
                               
      
      <?php
      foreach ($data as $row) 
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_imb/Updatelegalrw');?>"> 
       <!-- text input -->
       <input  name="id_simb" type="hidden" class="form-control"  value="<?php echo $row['id_simb'];?>" disabled>
       <div class="form-group">
        <label>Tanggal Daftar
        <input  name="tgl_daftar" type="date" class="form-control"  value="<?php echo $row['tgl_daftar'];?>" disabled >
      </div>
      <div class="form-group">
        <label>Nama Perusahaan</label>
        <input  name="nama_perusahaan" type="text" class="form-control"  value="<?php echo $row['nama_perusahaan'];?>" disabled >
      </div>
      <div class="form-group">
        <label>Jenis Usaha</label>
        <input  name="jenis_usaha" type="text" class="form-control"  value="<?php echo $row['jenis_usaha'];?>"  disabled>
      </div>
      <div class="form-group">
        <label>Alamat Usaha</label>
        <input  name="lokasi_bangunan" type="text" class="form-control"  value="<?php echo $row['lokasi_bangunan'];?>" disabled>
      </div>
      <div class="form-group">
        <label>File KTP</label><br/>
        <img src="<?php echo base_url('./uploads/IMB/'.$row['file_ktp']); ?>" height="100px">
        <input  name="file_ktp" type="text" class="form-control"  value="<?php echo $row['file_ktp'];?>" disabled>
      </div>
      <div class="form-group">
        <label>File Akta/Sertifikat</label><br/>
        <img src="<?php echo base_url('./uploads/IMB/'.$row['file_sertifikat']); ?>" height="100px">
        <input  name="file_sertifikat" type="text" class="form-control"  value="<?php echo $row['file_sertifikat'];?>"  disabled>
      </div>
      <div class="form-group">
        <label>File PBB</label><br/>
        <img src="<?php echo base_url('./uploads/IMB/'.$row['file_pbb']); ?>" height="100px">
        <input  name="file_pbb" type="text" class="form-control"  value="<?php echo $row['file_pbb'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Gambar bangunan terdahulu</label><br/>
        <img src="<?php echo base_url('./uploads/IMB/'.$row['file_gambar_bangunan']); ?>" height="100px">
        <input  name="file_gambar_bangunan" type="text" class="form-control"  value="<?php echo $row['file_gambar_bangunan'];?>" disabled>
      </div>
      <div class="form-group"><br/>
        <label>Surat tidak keberatan tetangga</label><br/>
        <img src="<?php echo base_url('./uploads/IMB/'.$row['file_keberatan']); ?>" height="100px">
        <input  name="file_keberatan" type="text" class="form-control"  value="<?php echo $row['file_keberatan'];?>"  disabled>
      </div>
      <div class="form-group">
        <label>File SK IMB</label><br/>
        <img src="<?php echo base_url('./uploads/IMB/'.$row['file_imb']); ?>" height="100px">
        <input  name="file_imb" type="text" class="form-control"  value="<?php echo $row['file_imb'];?>" disabled>
      </div>
      <div class="form-group">
        <label>file surat kesanggupan menyanggupi peraturan</label><br/>
        <img src="<?php echo base_url('./uploads/IMB/'.$row['file_kesanggupan']); ?>" height="100px">
        <input  name="file_kesanggupan" type="text" class="form-control"  value="<?php echo $row['file_kesanggupan'];?>" disabled>
      </div>
       <div class="form-group">
      <label>Legalisasi</label>
      <p>
      <input type="radio"  id="legalisasi_rw" name="legalisasi_rw" value="Y" checked> Ya
      <input type="radio"  id="legalisasi_rw" name="legalisasi_rw" value="N"> Tidak</p>

      </div>
      
      <p>
        <input type='submit' value='Simpan' id='submit' />
        <input type='reset' value='Batal' id='reset' onclick=self.history.back()>
                  <br />
                </p>


    </form>
  </div>

</thead>


</section>
</section>