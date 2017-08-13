<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel" style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i>Lihat HO</h4>
                            <hr>
                                <thead>
                               
      
      <?php
      foreach ($data as $row) 
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_ho/update');?>"> 
       <!-- text input -->
       <input  name="id_siho" type="hidden" class="form-control"  value="<?php echo $row['id_siho'];?>">
       
       <div class="form-group">
        <label>Tanggal Daftar</label>
        <input  name="tgl_daftar" type="text" class="form-control"  value="<?php echo $row['tgl_daftar'];?>">
      </div>
         <div class="form-group">
             <label>Tanggal RT</label>
             <input  name="tgl_rt" type="date" class="form-control"  value="<?php echo $row['tgl_rt'];?>">
           </div>
      <div class="form-group">
            <label>NIK</label> 
            <input name="nik" type="text" class="form-control"  value="<?php echo $row['nik'];?>" >
            
          </div>
      <div class="form-group">
        <label>Nama</label>
        <input  name="nama" type="text" class="form-control"  value="<?php echo $row['nama'];?>" >
      </div>
      <div class="form-group">
        <label>Tempat Lahir</label>
        <input  name="tempat_lahir" type="text" class="form-control"  value="<?php echo $row['tempat_lahir'];?>">
      </div>
      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input  name="tgl_lahir" type="text" class="form-control"  value="<?php echo $row['tgl_lahir'];?>">
      </div>
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <input  name="jenis_kelamin" type="text" class="form-control"  value="<?php echo $row['jenis_kelamin'];?>">
      </div>
      <div class="form-group">
        <label>Kewarganegaaran</label>
        <input  name="kewarganegaraan" type="text" class="form-control"  value="<?php echo $row['kewarganegaraan'];?>">
      </div>
      <div class="form-group">
        <label>Agama</label>
        <input  name="agama" type="text" class="form-control"  value="<?php echo $row['agama'];?>">
      </div>
      <div class="form-group">
        <label>Pekerjaan</label>
        <input  name="pekerjaan" type="text" class="form-control"  value="<?php echo $row['pekerjaan'];?>">
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input  name="alamat" type="text" class="form-control"  value="<?php echo $row['alamat'];?>">
      </div>
      <div class="form-group">
        <label>Nama Yayasan</label>
        <input  name="nama_yayasan" type="text" class="form-control"  value="<?php echo $row['nama_yayasan'];?>">
      </div>
       <div class="form-group">
        <label>Akta Pendirian Yayasan</label>
        <input  name="akta_pendirian_yayasan" type="text" class="form-control"  value="<?php echo $row['akta_pendirian_yayasan'];?>">
      </div>
      <div class="form-group">
        <strong>Fotocopy KTP</strong><br/>
        <img src="<?php echo base_url('./uploads/HO/'.$row['file_ktp']); ?>" height="100px">
        <input  name="file_ktp" type="file" class="form-control"  value="<?php echo $row['file_ktp'];?>" >
      </div>
      <div class="form-group">
        <strong>Fotocopy Akta Pendirian Perusahaan</strong><br/>
        <img src="<?php echo base_url('./uploads/HO/'.$row['file_akte']); ?>" height="100px">
        <input  name="file_akte" type="file" class="form-control"  value="<?php echo $row['file_akte'];?>" >
      </div>
      <div class="form-group">
        <strong>Fotocopy Bukti Kepemilikan Tanah</strong><br/>
        <img src="<?php echo base_url('./uploads/HO/'.$row['file_bukti_tanah']); ?>" height="100px">
        <input  name="file_bukti_tanah" type="file" class="form-control"  value="<?php echo $row['file_bukti_tanah'];?>" >
      </div>
      <div class="form-group">
        <strong>Fotocopy IMB</strong><br/>
        <img src="<?php echo base_url('./uploads/HO/'.$row['file_imb']); ?>" height="100px">
        <input  name="file_imb" type="file" class="form-control"  value="<?php echo $row['file_imb'];?>" >
      </div>
      <div class="form-group">
        <label>Fotocopy Surat Persetujuan Pengelola Lingkungan </label><br/>
        <img src="<?php echo base_url('./uploads/HO/'.$row['file_sppl']); ?>" height="100px">
        <input  name="file_sppl" type="file" class="form-control"  value="<?php echo $row['file_sppl'];?>" >
      </div>
      <div class="form-group">
        <strong>Fotocopy Surat Keterangan Domisili Usaha</strong><br/>
        <img src="<?php echo base_url('./uploads/HO/'.$row['file_skdu']); ?>" height="100px">
        <input  name="file_skdu" type="file" class="form-control"  value="<?php echo $row['file_skdu'];?>" >
      </div>
      <div class="form-group">
        <strong>Denah Petunjuk Lokasi</strong><br/>
        <img src="<?php echo base_url('./uploads/HO/'.$row['foto_denah']); ?>" height="100px">
        <input  name="foto_depan" type="file" class="form-control"  value="<?php echo $row['foto_depan'];?>" >
      </div>
      <div class="form-group">
        <strong>Foto Depan Bangunan</strong><br/>
        <img src="<?php echo base_url('./uploads/HO/'.$row['foto_depan']); ?>" height="100px">
        <input  name="foto_denah" type="file" class="form-control"  value="<?php echo $row['foto_denah'];?>" >
      </div>
      <div class="form-group">
        <strong>File Persetujuan Warga</strong><br/>
        <img src="<?php echo base_url('./uploads/HO/'.$row['file_persetujuan']); ?>" height="100px">
        <input  name="file_persetujuan" type="file" class="form-control"  value="<?php echo $row['file_persetujuan'];?>" >
      </div>
      <div class="form-group">
        <strong>File PBB</strong><br/>
        <img src="<?php echo base_url('./uploads/HO/'.$row['file_pbb']); ?>" height="100px">
        <input  name="file_pbb" type="file" class="form-control"  value="<?php echo $row['file_pbb'];?>" >
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