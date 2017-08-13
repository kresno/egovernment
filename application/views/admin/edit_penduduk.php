<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel" style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i> Edit Penduduk</h4>
                            <hr>
                                <thead>
      <?php
      foreach ($data as $row) 
        ?>
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_penduduk/update');?>"> 
       <!-- text input -->
       <input  name="nik" type="hidden" class="form-control"  value="<?php echo $row['nik'];?>">
       <div class="form-group">
        <label>Nama</label>
        <input  name="nama" type="text" class="form-control"  value="<?php echo $row['nama'];?>">
      </div>
      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input name="tgl_lahir" type="date" class="form-control"  value="<?php echo $row['tgl_lahir'];?>">
      <div class="form-group">
        <label>Jenis Kelamin</label> 
        <select name="jenis_kelamin" class="form-control">
        <option >--Pilih--</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
        </select>
        </div>
      <div class="form-group">
        <label>Alamat</label>
        <input  name="alamat" type="text" class="form-control"  value="<?php echo $row['alamat'];?>">
      </div>
      <div class="form-group">
        <label>RT</label>
        <input  name="rt" type="text" class="form-control"  value="<?php echo $row['rt'];?>">
      </div>
      <div class="form-group">
        <label>RW</label>
        <input  name="rw" type="text" class="form-control"  value="<?php echo $row['rw'];?>">
      </div>
      <div class="form-group">
        <label>Status Kawin</label>
        <select name="status_kawin" class="form-control">
        <option >--Pilih--</option>
        <option value="kawin">Kawin</option>
        <option value="belum kawin">Belum kawin</option>
        </select>
      <div class="form-group">
        <label>Pekerjaan</label>
        <input  name="pekerjaan" type="text" class="form-control" value="<?php echo $row['pekerjaan'];?>">
      </div>
      <div class="form-group">
        <label>Warga Negara</label>
        <select name="kewarganegaraan" class="form-control">
        <option >--Pilih--</option>
        <option value="WNA">Warga Negara Asing</option>
        <option value="WNI">Warga Negara Indonesia</option>
        </select>
      </div>
      <p>
        <input class="btn btn-info" type="submit" class="form-control"  value="Submit" id="submit" name="submit"  >
<a href="<?php echo base_url ('admin/data_penduduk/tampil') ?>" class="btn btn-info" role="button">Batal</a>
                  <br />
                </p>
          </div>
          </div>
    </form>
                          </thead>
  </div>
      </div>
    </section>
</section>
