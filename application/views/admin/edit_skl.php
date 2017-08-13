<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel" style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i> Edit Surat Keterangan Lahir</h4>
                            <hr>
                                <thead>
                               
      
      <?php
      foreach ($data as $row) 
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_skl/update');?>"> 
       <input  name="id_skl" type="hidden" class="form-control"  value="<?php echo $row['id_skl'];?>" >
       <div class="form-group">
        <label>Tanggal Daftar
        <input  name="tgl_daftar" type="date" class="form-control"  value="<?php echo $row['tgl_daftar'];?>" >
      </div>
      <div class="form-group">
        <label>Nama</label> 
        <input name="nama" type="text" class="form-control"  value="<?php echo $row['nama'];?>" >
        
        </div>
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <input  name="jenis_kelamin" type="text" class="form-control"  value="<?php echo $row['jenis_kelamin'];?>" >
      </div>
      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input  name="tgl_lahir" type="text" class="form-control"  value="<?php echo $row['tgl_lahir'];?>" >
      </div>
      <div class="form-group">
        <label>Kelahiran</label>
        <input  name="kelahiran" type="text" class="form-control"  value="<?php echo $row['kelahiran'];?>">
      </div>
      <div class="form-group">
        <label>Penolong Kelahiran</label>
        <input  name="penolong_kelahiran" type="text" class="form-control"  value="<?php echo $row['penolong_kelahiran'];?>">
      </div>
      <strong>IBU</strong>
      <div class="form-group">
        <label>Nama Ibu</label> 
        <input name="nama_ibu" type="text" class="form-control"  value="<?php echo $row['nama_ibu'];?>" >
        </div>
      <div class="form-group">
        <label>Alamat</label>
        <input  name="alamat_ibu" type="text" class="form-control"  value="<?php echo $row['alamat_ibu'];?>" >
      </div>
      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input  name="lahir_ibu" type="text" class="form-control"  value="<?php echo $row['lahir_ibu'];?>" >
      </div>
      <div class="form-group">
        <label>Agama</label>
        <input  name="agama_ibu" type="text" class="form-control"  value="<?php echo $row['agama_ibu'];?>">
      </div>
      <strong>Ayah</strong>
      <div class="form-group">
        <label>Nama Ayah</label> 
        <input name="nama_ayah" type="text" class="form-control"  value="<?php echo $row['nama_ayah'];?>" >
        </div>
      <div class="form-group">
        <label>Pekerjaan</label>
        <input  name="pekerjaan" type="text" class="form-control"  value="<?php echo $row['pekerjaan'];?>" >
      </div>
      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input  name="lahir_ayah" type="text" class="form-control"  value="<?php echo $row['lahir_ayah'];?>" >
      </div>
      <div class="form-group">
        <label>Agama</label>
        <input  name="agama_ayah" type="text" class="form-control"  value="<?php echo $row['agama_ayah'];?>">
      </div>
      <div class="form-group">
        <label>Kewarganegaraan</label>
        <input  name="kewarganegaraan_ayah" type="text" class="form-control"  value="<?php echo $row['kewarganegaraan_ayah'];?>" >
      </div>
      <div class="form-group">
        <label>No KTP/KK</label>
        <input  name="no_ktp" type="text" class="form-control"  value="<?php echo $row['no_ktp'];?>">
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