<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel" style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i> Edit SKU</h4>
                            <hr>
                                <thead>
                               
      
      <?php
      foreach ($data as $row) 
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_sku/update');?>"> 
       <!-- text input -->
       <input  name="id_skus" type="hidden" class="form-control"  value="<?php echo $row['id_skus'];?>">
       <div class="form-group">
           <label>Tanggal Daftar</label>
        <input  name="tgl_daftar" type="date" class="form-control"  value="<?php echo $row['tgl_daftar'];?>" >

      </div>

      <div class="form-group">
        <label>NO KTP</label> 
        <input name="nik" type="text" class="form-control"  value="<?php echo $row['nik'];?>" >
        
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
        <input  name="alamat" type="text" class="form-control"  value="<?php echo $row['alamat'];?>">
      </div>
      <div class="form-group">
        <label>File KTP</label><br>
        <img src="<?php echo base_url('./uploads/SKU/'.$row['file_ktp']); ?>" height="100px">
        <input  name="file_ktp" type="file" class="form-control"  value="<?php echo $row['file_ktp'];?>">
      </div>
      <div class="form-group">
        <label>File PBB</label><br>
        <img src="<?php echo base_url('./uploads/SKU/'.$row['file_pbb']); ?>" height="100px">
        <input  name="file_pbb" type="file" class="form-control"  value="<?php echo $row['file_pbb'];?>">
      </div>
      <p>
        <input type='submit' value='Simpan' id='submit' />
        <input type='reset' value='Batal' id='reset' onclick=self.history.back()>
                  <br />
                </p>


    </form>
                          </thead>
  </div>
      </div>
    </section>
</section>