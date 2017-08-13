<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel"style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i>Legalisasi SKDU</h4>
                            <hr>
                                <thead>
                               
      
      <?php
      foreach ($data as $row) 
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_skdu/updatelegal');?>"> 
       <!-- text input -->
       <input  name="id_skdu" type="hidden" class="form-control"  value="<?php echo $row['id_skdu'];?>">
       <div class="form-group">
        <label>Tanggal Daftar</label>
        <input  name="tgl_daftar" type="text" class="form-control"  value="<?php echo $row['tgl_daftar'];?>" readonly>
      </div>
      
      <div class="form-group">
        <label>Nama Perusahaan</label>
        <input  name="nama_perusahaan" type="text" class="form-control"  value="<?php echo $row['nama_perusahaan'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Nama Penanggung Jawab Perusahaan</label>
        <input  name="penanggung_jawab" type="text" class="form-control"  value="<?php echo $row['penanggung_jawab'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Jenis Usaha</label>
        <input  name="jenis_usaha" type="text" class="form-control"  value="<?php echo $row['jenis_usaha'];?>" readonly>
      </div>
      <div class="form-group">
        <label>NPWP</label>
        <input  name="npwp" type="text" class="form-control"  value="<?php echo $row['npwp'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Akta Perusahaan</label>
        <input  name="akta_perusahaan" type="text" class="form-control"  value="<?php echo $row['akta_perusahaan'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Status Tempat</label>
        <input  name="status_tempat" type="text" class="form-control"  value="<?php echo $row['status_tempat'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Luas Tempat</label>
        <input  name="luas_tempat" type="text" class="form-control"  value="<?php echo $row['luas_tempat'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Alamat Usaha</label>
        <input  name="alamat_usaha" type="text" class="form-control"  value="<?php echo $row['alamat_usaha'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Jumlah Tenaga Kerja</label>
        <input  name="jumlah_tenaga" type="text" class="form-control"  value="<?php echo $row['jumlah_tenaga'];?>" readonly>
      </div>
      <div class="form-group">
        <label>File KTP</label>
        <img src="<?php echo base_url('./uploads/SKDU/'.$row['file_ktp']); ?>" height="100px">
        <input  name="file_ktp" type="text" class="form-control"  value="<?php echo $row['file_ktp'];?>" readonly>
      </div>
      <div class="form-group">
        <label>File Akta</label>
        <img src="<?php echo base_url('./uploads/SKDU/'.$row['file_akte']); ?>" height="100px">
        <input  name="file_akte" type="text" class="form-control"  value="<?php echo $row['file_akte'];?>" readonly>
      </div>
      <div class="form-group">
        <label>File KK</label>
        <img src="<?php echo base_url('./uploads/SKDU/'.$row['file_kk']); ?>" height="100px">
        <input  name="file_kk" type="text" class="form-control"  value="<?php echo $row['file_kk'];?>" readonly>
      </div>
      <div class="form-group">
        <label>File PBB</label>
        <img src="<?php echo base_url('./uploads/SKDU/'.$row['file_pbb']); ?>" height="100px">
        <input name="file_pbb" type="text" class="form-control"  value="<?php echo $row['file_pbb'];?>" readonly>
      </div>
      
      <div class="form-group">
      <label>Legalisasi</label>
      <p>
      <input type="radio"  id="legalisasi_rt" name="legalisasi_rt" value="Y" checked> Ya
      <input type="radio"  id="legalisasi_rt" name="legalisasi_rt" value="N"> Tidak
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