<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel"style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i>Lihat SKDU</h4>
                            <hr>
                                <thead>
                               
      
      <?php
      foreach ($data as $row) 
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Admin_skdu/Lihat');?>"> 
       <!-- text input -->
       <input  name="id_skdu" type="hidden" class="form-control"  value="<?php echo $row['id_skdu'];?>">
       <div class="form-group">
        <label>Tanggal Daftar</label>
        <input  name="tgl_daftar" type="text" class="form-control"  value="<?php echo $row['tgl_daftar'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Nama Perusahaan</label>
        <input  name="nama_perusahaan" type="text" class="form-control"  value="<?php echo $row['nama_perusahaan'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Nama Penanggung Jawab Perusahaan</label>
        <input  name="penanggung_jawab" type="text" class="form-control"  value="<?php echo $row['penanggung_jawab'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Jenis Usaha</label>
        <input  name="jenis_usaha" type="text" class="form-control"  value="<?php echo $row['jenis_usaha'];?>" disabled>
      </div>
      <div class="form-group">
        <label>NPWP</label>
        <input  name="npwp" type="text" class="form-control"  value="<?php echo $row['npwp'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Akta Perusahaan</label>
        <input  name="akta_perusahaan" type="text" class="form-control"  value="<?php echo $row['akta_perusahaan'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Status Tempat</label>
        <input  name="status_tempat" type="text" class="form-control"  value="<?php echo $row['status_tempat'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Luas Tempat</label>
        <input  name="luas_tempat" type="text" class="form-control"  value="<?php echo $row['luas_tempat'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Alamat Usaha</label>
        <input  name="alamat_usaha" type="text" class="form-control"  value="<?php echo $row['alamat_usaha'];?>" disabled>
      </div>
      <div class="form-group">
        <label>Jumlah Tenaga Kerja</label>
        <input  name="jumlah_tenaga" type="text" class="form-control"  value="<?php echo $row['jumlah_tenaga'];?>" disabled>
      </div>
      <div class="form-group">
        <label>File RT</label><br>
        <a href="<?php echo base_url('/uploads/SKDU/SuratRT/'.$row['file_rt']); ?>">
          <img src="<?php echo base_url('/uploads/SKDU/SuratRT/'.$row['file_rt']); ?>" height="100px">
          </a>
            <input  name="file_rt" type="text" class="form-control"  value="<?php echo $row['file_rt'];?>" disabled>
      </div>
          
      <div class="form-group">
        <label>File RW</label><br>
        <a href="<?php echo base_url('/uploads/SKDU/SuratRW/'.$row['file_rw']); ?>">
          <img src="<?php echo base_url('/uploads/SKDU/SuratRW/'.$row['file_rw']); ?>" height="100px">
          </a>
        <input  name="file_rw" type="text" class="form-control"  value="<?php echo $row['file_rw'];?>" disabled>
      </div>
      <div class="form-group">
        <label>File KTP</label>
          <a href="<?php echo base_url('/uploads/SKDU/KTP/'.$row['file_ktp']); ?>">
              <img src="<?php echo base_url('/uploads/SKDU/KTP/'.$row['file_ktp']); ?>" height="100px">
          </a>
              <input  name="file_ktp" type="text" class="form-control"  value="<?php echo $row['file_ktp'];?>" readonly>
      </div>
      <div class="form-group">
        <label>File Akta</label>
        <a href="<?php echo base_url('/uploads/SKDU/AktaNotaris/'.$row['file_akte']); ?>">
          <img src="<?php echo base_url('/uploads/SKDU/AktaNotaris/'.$row['file_akte']); ?>" height="100px">
        </a>
          <input  name="file_akte" type="text" class="form-control"  value="<?php echo $row['file_akte'];?>" readonly>
      </div>
      <div class="form-group">
        <label>File KK</label>
        <a href="<?php echo base_url('/uploads/SKDU/KK/'.$row['file_kk']); ?>">
          <img src="<?php echo base_url('/uploads/SKDU/KK/'.$row['file_kk']); ?>" height="100px">
        </a>
          <input  name="file_kk" type="text" class="form-control"  value="<?php echo $row['file_kk'];?>" readonly>
      </div>
      <div class="form-group">
        <label>File PBB</label>
        <a href="<?php echo base_url('/uploads/SKDU/pbb/'.$row['file_pbb']); ?>"> 
           <img src="<?php echo base_url('/uploads/SKDU/pbb/'.$row['file_pbb']); ?>" height="100px">
          </a>
        <input name="file_pbb" type="text" class="form-control"  value="<?php echo $row['file_pbb'];?>" readonly>
      </div>
      
      

      <p>
        <input type='reset' value='Kembali' id='reset' onclick=self.history.back()>
        <br />
       </p>


    </form>
  </div>

</thead>


</section>
</section>