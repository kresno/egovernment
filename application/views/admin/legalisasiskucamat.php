<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel" style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i>Legalisasi SKU</h4>
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
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_sku/updatelegalcamat');?>"> 
       <!-- text input -->
       <input  name="id_skus" type="hidden" class="form-control"  value="<?php echo $row['id_skus'];?>">
       <input  name="no_hp" type="hidden" class="form-control"  value="<?php echo $no_hp;?>">
       <input  name="email" type="hidden" class="form-control"  value="<?php echo $email;?>">
       <div class="form-group">
        <label>Tanggal Daftar</label>
        <input  name="tgl_daftar" type="text" class="form-control"  value="<?php echo $row['tgl_daftar'];?>" readonly>

      </div>

      <div class="form-group">
        <label>Nama Perusahaan</label>
        <input  name="nama_perusahaan" type="text" class="form-control"  value="<?php echo $row['nama_perusahaan'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Jenis Usaha</label>
        <input  name="jenis_usaha" type="text" class="form-control"  value="<?php echo $row['jenis_usaha'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Alamat Usaha</label>
        <input  name="alamat_usaha" type="text" class="form-control"  value="<?php echo $row['alamat_usaha'];?>" readonly>
      </div>
      
      <div class="form-group">
        <label>File RT</label><br>
        <a href="<?php echo base_url('/uploads/SKU/SuratRT/'.$row['file_rt']); ?>">
          <img src="<?php echo base_url('/uploads/SKU/SuratRT/'.$row['file_rt']); ?>" height="100px">
          </a>
        <input  name="file_rw" type="text" class="form-control"  value="<?php echo $row['file_rw'];?>" disabled>
      </div>     
      <div class="form-group">
        <label>File RW</label><br>
        <a href="<?php echo base_url('/uploads/SKU/SuratRW/'.$row['file_rw']); ?>">
          <img src="<?php echo base_url('/uploads/SKU/SuratRW/'.$row['file_rw']); ?>" height="100px">
          </a>
        <input  name="file_rw" type="text" class="form-control"  value="<?php echo $row['file_rw'];?>" disabled>
      </div>
      <div class="form-group">
        <label>File KTP</label>
          <a href="<?php echo base_url('/uploads/SKU/KTP/'.$row['file_ktp']); ?>">
              <img src="<?php echo base_url('/uploads/SKU/KTP/'.$row['file_ktp']); ?>" height="100px">
          </a>
              <input  name="file_ktp" type="text" class="form-control"  value="<?php echo $row['file_ktp'];?>" readonly>
      </div>
      <div class="form-group">
        <label>File PBB</label>
          <a href="<?php echo base_url('/uploads/SKU/pbb/'.$row['file_pbb']); ?>">
              <img src="<?php echo base_url('/uploads/SKU/pbb/'.$row['file_pbb']); ?>" height="100px">
          </a>
              <input  name="file_pbb" type="text" class="form-control"  value="<?php echo $row['file_pbb'];?>" readonly>
      </div>
          
      <div class="form-group">
      <label>Legalisasi</label>
      <p>
      <input type="radio"  id="legalisasi_camat" name="legalisasi_camat" value="Y" checked> Ya
      <input type="radio"  id="legalisasi_camat" name="legalisasi_camat" value="X"> Tidak</p>
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