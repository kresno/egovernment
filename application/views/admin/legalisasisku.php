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
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_sku/updatelegal');?>"> 
       <!-- text input -->
       <input  name="id_skus" type="hidden" class="form-control"  value="<?php echo $row['id_skus'];?>">
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
        <label>File KTP</label>
        <img src="<?php echo base_url('./uploads/SKU'.$row['file_ktp']); ?>" height="100px">
        <input  name="file_ktp" type="text" class="form-control"  value="<?php echo $row['file_ktp'];?>" readonly>
      </div>
      <div class="form-group">
        <label>File PBB</label>
        <img src="<?php echo base_url('./uploads/SKU/'.$row['file_pbb']); ?>" height="100px">
        <input name="file_pbb" type="text" class="form-control"  value="<?php echo $row['file_pbb'];?>" readonly>
      </div>
      <div class="form-group">

      <label>Legalisasi</label>
      <p>
      <input type="radio"  id="legalisasi_rt" name="legalisasi_rt" value="Y" checked> Ya
      <input type="radio"  id="legalisasi_rt" name="legalisasi_rt" value="N"> Tidak</p>

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