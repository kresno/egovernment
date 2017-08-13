<section id="main-content">
  <section class="wrapper">
    <!-- Small boxes (Stat box) -->
    <div class="col-md-12 mt">
      <div class="content-panel">
        <h4><i class="fa fa-angle-right"></i> Edit Kelurahan</h4>
        <hr>
        <thead>
          <?php
          foreach ($data as $row) 
            ?>
          <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_kelurahan/update');?>"> 
           <!-- text input -->
           <input  name="id_instansi" type="hidden" class="form-control"  value="<?php echo $row['id_instansi'];?>">
           <div class="form-group">
            <label>Nama Kelurahan</label>
            <input  name="nama_instansi" type="text" class="form-control"  value="<?php echo $row['nama_instansi'];?>">
          </div>
          <div class="form-group">
            <label>Kode Kelurahan</label>
            <input name="kode_instansi" type="text" class="form-control"  value="<?php echo $row['kode_instansi'];?>">
            <div class="form-group">
              <label>Alamat</label> 
              <input name="alamat_instansi" type="text" class="form-control"  value="<?php echo $row['alamat_instansi'];?>">
            </div>
            <div class="form-group">
              <label>Kode Pos</label>
              <input  name="kode_pos" type="text" class="form-control"  value="<?php echo $row['kode_pos'];?>">
            </div>
            <div class="form-group">
              <label>Telepon</label>
              <input name="telepon" type="text" class="form-control"  value="<?php echo $row['telepon'];?>">
            </div>
            <p>
              <input class="btn btn-info" type="submit" class="form-control"  value="Submit" id="submit" name="submit"  >
<a href="<?php echo base_url ('admin/manajemen_kelurahan/tampil') ?>" class="btn btn-info" role="button">Batal</a>
              <br />
            </p>
          </form>
        </div>
      </thead>
    </section>
  </section>