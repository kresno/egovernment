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
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_ho/updatelegalcamat');?>"> 
       <!-- text input -->
       <input  name="id_siho" type="hidden" class="form-control"  value="<?php echo $row['id_siho'];?>">
       <div class="form-group">

        <label>Legalisasi</label>
        <input  name="tgl_rt" type="hidden" class="form-control"  value="<?php echo $row['tgl_rt'];?>" readonly>

      </div>
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
        <label>File KTP</label>
        <input  name="file_ktp" type="text" class="form-control"  value="<?php echo $row['file_ktp'];?>" readonly>
      </div>
      <div class="form-group">
        <label>File Akta</label>
        <input  name="file_akte" type="text" class="form-control"  value="<?php echo $row['file_akte'];?>" readonly>
      </div>
      <div class="form-group">
      <label>Legalisasi</label>
      <p>
      <input type="radio"  id="legalisasi_camat" name="legalisasi_camat" value="Y" checked> Ya
      <input type="radio"  id="legalisasi_camat" name="legalisasi_camat" value="N"> Tidak
      </p>
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