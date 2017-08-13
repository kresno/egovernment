<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel" style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i>Legalisasi Surat Keterangan Tempat Tinggal</h4>
                            <hr>
                                <thead>
                               
      
      <?php
      foreach ($data as $row) 
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_sktt/updatelegalrw');?>"> 
       <!-- text input -->
       <input  name="id_sktt" type="hidden" class="form-control"  value="<?php echo $row['id_sktt'];?>">
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
        <label>Tanggal Lahirtgl_lahir</label>
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
        <label>Alamat</label>
        <input  name="alamat" type="text" class="form-control"  value="<?php echo $row['alamat'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Agama</label>
        <input  name="agama" type="text" class="form-control"  value="<?php echo $row['agama'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input  name="alamat" type="text" class="form-control"  value="<?php echo $row['alamat'];?>" readonly>
      </div>
      <div class="form-group">
        <label>File KTP</label>
        <img src="<?php echo base_url('./uploads/SKTT/KTP/'.$row['file_ktp']); ?>" height="100px">
        <input  name="file_ktp" type="text" class="form-control"  value="<?php echo $row['file_ktp'];?>" readonly>
      </div>
      <div class="form-group">
        <label>File KK</label>
        <img src="<?php echo base_url('./uploads/SKTT/KK'.$row['file_kk']); ?>" height="100px">
        <input name="file_kk" type="text" class="form-control"  value="<?php echo $row['file_kk'];?>" readonly>
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