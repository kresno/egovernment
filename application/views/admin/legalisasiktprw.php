<section id="main-content">
  <section class="wrapper">
    <!-- Small boxes (Stat box) -->
    <div class="col-md-12 mt">
      <div class="content-panel"style="padding-left: 10px">
        <h4><i class="fa fa-angle-right"></i> Verifikasi KTP</h4>
        <hr>
        <thead>
          <?php
          foreach ($data as $row) 
            ?>

          <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_ktp/updatelegalrw');?>"> 
           <!-- text input -->
           <input  name="id_ktp" type="hidden" class="form-control"  value="<?php echo $row['id_ktp'];?>">
           <div class="form-group">
            <label>Tanggal Daftar</label>
              <input  name="tgl_daftar" type="date" class="form-control"  value="<?php echo $row['tgl_daftar'];?>"disabled>
            </div>
            <div class="form-group">
              <label>Nama</label> 
              <input type="text"  id="nama" name="nama"class="form-control"  value="" disabled>
            </div>
            <div class="form-group">
              <label>Provinsi</label> 
              <input name="provinsi" type="text" class="form-control"  value="<?php echo $row['provinsi'];?>"disabled >
            </div>
            <div class="form-group">
              <label>Kabupaten</label>
              <input  name="kabupaten" type="text" class="form-control"  value="<?php echo $row['kabupaten'];?>" disabled>
            </div>
            <div class="form-group">
              <label>Kecamatan</label>
              <input  name="kecamatan" type="text" class="form-control"  value="<?php echo $row['kecamatan'];?>"disabled>
            </div>
            <div class="form-group">
              <label>Kelurahan</label>
              <input  name="kelurahan" type="text" class="form-control"  value="<?php echo $row['kelurahan'];?>" disabled>
            </div>
            <div class="form-group">
              <label>Permohonan KTP</label><br>
              <input type="radio"  id="permohonan_ktp" name="permohonan_ktp" value="baru" checked disabled>Baru<br>
              <input type="radio"  id="permohonan_ktp" name="permohonan_ktp" value="perpanjangan" disabled> perpanjangan <br>
              <input type="radio"  id="permohonan_ktp" name="permohonan_ktp" value="penggantian"disabled>penggantian <br>
            </div>
            
            <div class="form-group"> 
            <label>File Foto</label> <br/>
            <img src="<?php echo base_url('./uploads/KTP/'.$row['file_foto']); ?>" height="100px"><br>
            <input type="text"  id="file_foto" name="file_foto" class="form-control"  value="<?php echo $row['file_foto'];?>" disabled>
          </div>
            <div class="form-group"> 
              <label>No KK</label> <br/>
              <img src="<?php echo base_url('./uploads/KTP/'.$row['file_kk']); ?>" height="100px"><br>
              <input type="text"  id="file_kk" name="file_kk"  class="form-control" value="<?php echo $row['file_kk'];?>" disabled>
            </div>
            <div class="form-group">
              <label>Legalisasi</label>
              <p>
                <input type="radio"  id="legalisasi_rw" name="legalisasi_rw" value="Y" checked> Ya
                <input type="radio"  id="legalisasi_rw" name="legalisasi_rw" value="N"> Tidak</p>
              </div>
              <p>
                <input type='submit' value='Simpan' id='submit' />
                <input type='reset' value='Kembali' id='reset' onclick=self.history.back()>
                <br />
              </p>
            </form>
          </div>
        </thead>
      </section>
    </section>