<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel"style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i> Edit SKK</h4>
                            <hr>
                                <thead>
                               
      
      <?php
      foreach ($data as $row) 
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_skk/update');?>"> 
       <!-- text input -->
       <input  name="id_skk" type="hidden" class="form-control"  value="<?php echo $row['id_skk'];?>" >
       <div class="form-group">
        <label>Tanggal Daftar</label>
        <input  name="tgl_daftar" type="text" class="form-control"  value="<?php echo $row['tgl_daftar'];?>" >
      </div>
      <div class="form-group">
        <label>Nama</label>
        <input  name="nama" type="text" class="form-control"  value="<?php echo $row['nama'];?>" >
      </div>
      <div class="form-group">
        <label>Tempat Lahir</label>
        <input  name="tempat_lahir" type="text" class="form-control"  value="<?php echo $row['tempat_lahir'];?>" >
      </div>
      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input  name="tgl_lahir" type="text" class="form-control"  value="<?php echo $row['tgl_lahir'];?>" >
      </div>
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <input  name="jenis_kelamin" type="text" class="form-control"  value="<?php echo $row['jenis_kelamin'];?>" >
      </div>
      <div class="form-group">
        <label>Kewarganegaraan</label>
        <input  name="kewarganegaraan" type="text" class="form-control"  value="<?php echo $row['kewarganegaraan'];?>" >
      </div>
      <div class="form-group">
        <label>Agama</label>
        <input  name="agama" type="text" class="form-control"  value="<?php echo $row['agama'];?>" >
      </div>
      <div class="form-group">
        <label>Kewarganegaraan</label>
        <input  name="kewarganegaraan" type="text" class="form-control"  value="<?php echo $row['kewarganegaraan'];?>" >
      </div>
      <div class="form-group">
        <label>Tanggal Meninggal Dunia</label>
        <input  name="tgl_meninggal" type="text" class="form-control"  value="<?php echo $row['tgl_meninggal'];?>" >
      </div>
      <div class="form-group">
        <label>Sebab Meninggal Dunia</label>
        <input  name="sebab_meninggal" type="text" class="form-control"  value="<?php echo $row['sebab_meninggal'];?>" >
      </div>
      <div class="form-group">
        <label>Tempat Meninggal Dunia</label>
        <input  name="tempat_meninggal" type="text" class="form-control"  value="<?php echo $row['tempat_meninggal'];?>" >
      </div><br>
     <h4>KELUARGA YANG DITINGGALKAN</h4> <br>
      <div class="form-group">
        <label>Nama</label>
        <input  name="nama_saudara" type="text" class="form-control"  value="<?php echo $row['nama_saudara'];?>" >
      </div>
      <div class="form-group">
        <label>Umur</label>
        <input  name="umur_saudara" type="text" class="form-control"  value="<?php echo $row['umur_saudara'];?>" >
      </div>
      <div class="form-group">
        <label>Pekerjaan saudara</label>
        <input  name="pekerjaan" type="text" class="form-control"  value="<?php echo $row['pekerjaan'];?>" >
      </div>
      <div class="form-group">
        <label>Alamat_saudara</label>
        <input  name="alamat_saudara" type="text" class="form-control"  value="<?php echo $row['alamat_saudara'];?> ">
      </div>
      <p>
            <input type='submit' value='Simpan' id='submit' />
            <input type='reset' value='Batal' id='reset' onclick=self.history.back()>
            <br />
          </p>
    </form>
  </div>
</thead>
</section>
</section>