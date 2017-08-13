<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel" style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i> Edit Identitas Pemohon IMB</h4>
                            <hr>
                                <thead>
                               
      
      <?php
      foreach ($data as $row) 
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_imb/update');?>"> 
       <!-- text input -->
       <input  name="id_simb" type="hidden" class="form-control"  value="<?php echo $row['id_simb'];?>">
       <div class="form-group">
        <label>Tanggal Daftar
        <input  name="tgl_daftar" type="date" class="form-control"  value="<?php echo $row['tgl_daftar'];?>" >
      </div>
      <div class="form-group">
        <label>Nama Perusahaan</label>
        <input  name="nama_perusahaan" type="text" class="form-control"  value="<?php echo $row['nama_perusahaan'];?>" >
      </div>
      <div class="form-group">
        <label>Jenis Usaha</label>
        <input  name="jenis_usaha" type="text" class="form-control"  value="<?php echo $row['jenis_usaha'];?>" >
     </div>
      <div class="form-group">
        <label>Alamat Usaha</label>
        <input  name="lokasi_bangunan" type="text" class="form-control"  value="<?php echo $row['lokasi_bangunan'];?>">
      </div>
      <div class="form-group">
        <label>File KTP</label><br/>
        <img src="<?php echo base_url('./uploads/IMB/'.$row['file_ktp']); ?>" height="100px">
        <input  name="file_ktp" type="file" class="form-control"  value="<?php echo $row['file_ktp'];?>" >
      </div>
      <div class="form-group">
        <label>File Akta/Sertifikat</label><br/>
        <img src="<?php echo base_url('./uploads/IMB/'.$row['file_sertifikat']); ?>" height="100px">
        <input  name="file_sertifikat" type="file" class="form-control"  value="<?php echo $row['file_sertifikat'];?>"  >
      </div>
      <div class="form-group">
        <label>File PBB</label><br/>
        <img src="<?php echo base_url('./uploads/IMB/'.$row['file_pbb']); ?>" height="100px">
        <input  name="file_pbb" type="file" class="form-control"  value="<?php echo $row['file_pbb'];?>" >
      </div>
      <div class="form-group">
        <label>Gambar bangunan terdahulu</label><br/>
        <img src="<?php echo base_url('./uploads/IMB/'.$row['file_gambar_bangunan']); ?>" height="100px">
        <input  name="file_gambar_bangunan" type="file" class="form-control"  value="<?php echo $row['file_gambar_bangunan'];?>" >
      </div>
      <div class="form-group"><br/>
        <label>Surat tidak keberatan tetangga</label><br/>
        <img src="<?php echo base_url('./uploads/IMB/'.$row['file_keberatan']); ?>" height="100px">
        <input  name="file_keberatan" type="file" class="form-control"  value="<?php echo $row['file_keberatan'];?>"  >
      </div>
      <div class="form-group">
        <label>File SK IMB</label><br/>
        <img src="<?php echo base_url('./uploads/IMB/'.$row['file_imb']); ?>" height="100px">
        <input  name="file_imb" type="file" class="form-control"  value="<?php echo $row['file_imb'];?>" >
      </div>
      <div class="form-group">
        <label>file surat kesanggupan menyanggupi peraturan</label><br/>
        <img src="<?php echo base_url('./uploads/IMB/'.$row['file_kesanggupan']); ?>" height="100px">
        <input  name="file_kesanggupan" type="file" class="form-control"  value="<?php echo $row['file_kesanggupan'];?>" >
      </div>
      
      
      <p>
        <input type='submit' value='Simpan' id='submit' />
        <input type='reset' value='Batal' id='reset' onclick=self.history.back()>
                  <br />
                </p>
          </div>

    </form>
                          </thead>
  </div>
      </div>
    </section>
</section>