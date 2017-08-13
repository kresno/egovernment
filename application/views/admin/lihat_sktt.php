<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel"style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i>Legalisasi Surat Keterangan Tempat Tinggal</h4>
                            <hr>
                                <thead>
                               
      
      <?php
      foreach ($data as $row) 
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Admin_sktt/Lihat');?>">
       <!-- text input -->
       <input  name="id_sktt" type="hidden" class="form-control"  value="<?php echo $row['id_sktt'];?>" readonly>
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
        <label>File RT</label><br>
        <a href="<?php echo base_url('/uploads/SKTT/SuratRT/'.$row['file_rt']); ?>">
          <img src="<?php echo base_url('/uploads/SKTT/SuratRT/'.$row['file_rt']); ?>" height="100px">
          </a>
        <input  name="file_rw" type="text" class="form-control"  value="<?php echo $row['file_rt'];?>" disabled>
      </div>
          
      <div class="form-group">
        <label>File RW</label><br>
        <a href="<?php echo base_url('/uploads/SKTT/SuratRW/'.$row['file_rw']); ?>">
          <img src="<?php echo base_url('/uploads/SKTT/SuratRW/'.$row['file_rw']); ?>" height="100px">
          </a>
        <input  name="file_rw" type="text" class="form-control"  value="<?php echo $row['file_rw'];?>" disabled>
      </div>
    <div class="form-group">
        <label>FOTO</label><br>
       <a href="<?php echo base_url('/uploads/SKTT/FOTO/'.$row['file_pasfoto']); ?>">
          <img src="<?php echo base_url('/uploads/SKTT/FOTO/'.$row['file_pasfoto']); ?>" height="100px">
          </a>
        <input  name="file_pasfoto" type="text" class="form-control"  value="<?php echo $row['file_pasfoto'];?>" disabled>
      
      </div>
      <div class="form-group">
        <label>File KTP</label><br>
       <a href="<?php echo base_url('/uploads/SKTT/KTP/'.$row['file_ktp']); ?>">
          <img src="<?php echo base_url('/uploads/SKTT/KTP/'.$row['file_ktp']); ?>" height="100px">
          </a>
        <input  name="file_ktp" type="text" class="form-control"  value="<?php echo $row['file_ktp'];?>" disabled>
      </div>
      <div class="form-group">
        <label>File KK</label><br>
        <a href="<?php echo base_url('/uploads/SKTT/KK/'.$row['file_kk']); ?>">
          <img src="<?php echo base_url('/uploads/SKTT/KK/'.$row['file_kk']); ?>" height="100px">
          </a>
        <input  name="file_kk" type="text" class="form-control"  value="<?php echo $row['file_kk'];?>" disabled>
    </div>
      

      <p>
        <input type='reset' value='Kembali' id='reset' onclick=self.history.back()>
        <br />
       </p>


    </form>
    </thead>
  </div>
      </div>
    </section>
</section>