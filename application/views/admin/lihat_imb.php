<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel"style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i>Identitas Pemohon IMB</h4>
                            <hr>
                                <thead>
                               
      
      <?php
      foreach ($data as $row) 
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_imb/Lihat');?>"> 
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
        <label>File RT</label><br>
        <a href="<?php echo base_url('/uploads/IMB/SuratRT/'.$row['file_rt']); ?>">
          <img src="<?php echo base_url('/uploads/IMB/SuratRT/'.$row['file_rt']); ?>" height="100px">
          </a>
        <input  name="file_rw" type="text" class="form-control"  value="<?php echo $row['file_rw'];?>" disabled>
      </div>
          
      <div class="form-group">
        <label>File RW</label><br>
        <a href="<?php echo base_url('/uploads/IMB/SuratRW/'.$row['file_rw']); ?>">
          <img src="<?php echo base_url('/uploads/IMB/SuratRW/'.$row['file_rw']); ?>" height="100px">
          </a>
        <input  name="file_rw" type="text" class="form-control"  value="<?php echo $row['file_rw'];?>" disabled>
      </div>

      <div class="form-group">
        <label>File KTP</label><br/>
        <a href="<?php echo base_url('/uploads/IMB/ktp/'.$row['file_ktp']); ?>">
          <img src="<?php echo base_url('/uploads/IMB/tkp/'.$row['file_ktp']); ?>" height="100px">
          </a>
        <input  name="file_ktp" type="text" class="form-control"  value="<?php echo $row['file_ktp'];?>" disabled>
      </div>
      <div class="form-group">
        <label>File Akta/Sertifikat</label><br/>
        <a href="<?php echo base_url('/uploads/IMB/sertifikat/'.$row['file_sertifikat']); ?>">
          <img src="<?php echo base_url('/uploads/IMB/sertifikat/'.$row['file_sertifikat']); ?>" height="100px">
          </a>
        <input  name="file_sertifikat" type="text" class="form-control"  value="<?php echo $row['file_sertifikat'];?>" disabled>
      </div>
      <div class="form-group">
        <label>File PBB</label><br/>
        <a href="<?php echo base_url('/uploads/IMB/pbb/'.$row['file_pbb']); ?>">
          <img src="<?php echo base_url('/uploads/IMB/pbb/'.$row['file_pbb']); ?>" height="100px">
          </a>
        <input  name="file_pbb" type="text" class="form-control"  value="<?php echo $row['file_pbb'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Gambar bangunan terdahulu</label><br/>
         <a href="<?php echo base_url('/uploads/IMB/GambarBangunan/'.$row['file_gambar_bangunan']); ?>">
          <img src="<?php echo base_url('/uploads/IMB/GambarBangunan/'.$row['file_gambar_bangunan']); ?>" height="100px">
         </a>
        <input name="file_gambar_bangunan" type="text" class="form-control"  value="<?php echo $row['file_gambar_bangunan'];?>" disabled>
      </div>
      <div class="form-group"><br/>
        <label>Surat tidak keberatan tetangga</label><br/>
        <a href="<?php echo base_url('/uploads/IMB/keberatan/'.$row['file_keberatan']); ?>">
          <img src="<?php echo base_url('/uploads/IMB/keberatan/'.$row['file_keberatan']); ?>" height="100px">
          </a>
        <input  name="file_keberatan" type="text" class="form-control"  value="<?php echo $row['file_keberatan'];?>" disabled>
       </div>
      <div class="form-group">
        <label>File SK IMB</label><br/>
        <a href="<?php echo base_url('/uploads/IMB/SKIMB/'.$row['file_imb']); ?>">
          <img src="<?php echo base_url('/uploads/IMB/SKIMB/'.$row['file_imb']); ?>" height="100px">
          </a>
        <input  name="file_imb" type="text" class="form-control"  value="<?php echo $row['file_imb'];?>" disabled>
      </div>
      <div class="form-group">
        <label>file surat kesanggupan menyanggupi peraturan</label><br/>
         <a href="<?php echo base_url('/uploads/IMB/kesanggupan/'.$row['file_kesanggupan']); ?>">
          <img src="<?php echo base_url('/uploads/IMB/kesanggupan/'.$row['file_kesanggupan']); ?>" height="100px">
          </a>
        <input  name="file_kesanggupan" type="text" class="form-control"  value="<?php echo $row['file_kesanggupan'];?>" disabled>
      </div>
      
      <p>
        <input type='reset' value='Kembali' id='reset' onclick=self.history.back()>
                  <br />
                </p>

          </div>
    </form>
 </thead>
  </div>
      </div>
    </section>