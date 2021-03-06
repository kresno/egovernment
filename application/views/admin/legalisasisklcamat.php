<section id="main-content">
  <section class="wrapper">
    <!-- Small boxes (Stat box) -->
    <div class="col-md-12 mt">
    <div class="content-panel" style="padding-left: 10px">
        <h4><i class="fa fa-angle-right"></i>Verifikasi Surat Keterangan Lahir</h4>
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

          <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_skl/updatelegalcamat');?>"> 
           <!-- text input -->
           <input  name="id_skl" type="hidden" class="form-control"  value="<?php echo $row['id_skl'];?>"readonly>
           <input  name="no_hp" type="hidden" class="form-control"  value="<?php echo $no_hp;?>">
           <input  name="email" type="hidden" class="form-control"  value="<?php echo $email;?>">
           <div class="form-group">
            <label>Tanggal Daftar
              <input  name="tgl_daftar" type="date" class="form-control"  value="<?php echo $row['tgl_daftar'];?>" disabled>
            </div>
            <div class="form-group">
              <label>Nama</label> 
              <input name="nama" type="text" class="form-control"  value="<?php echo $row['nama'];?>"disabled >
              
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <input  name="jenis_kelamin" type="text" class="form-control"  value="<?php echo $row['jenis_kelamin'];?>" disabled>
            </div>
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input  name="tgl_lahir" type="text" class="form-control"  value="<?php echo $row['tgl_lahir'];?>" disabled>
            </div>
            <div class="form-group">
              <label>Kelahiran</label>
              <input  name="kelahiran" type="text" class="form-control"  value="<?php echo $row['kelahiran'];?>"disabled>
            </div>
            <div class="form-group">
              <label>Penolong Kelahiran</label>
              <input  name="penolong_kelahiran" type="text" class="form-control"  value="<?php echo $row['penolong_kelahiran'];?>"disabled>
            </div>
            <strong>IBU</strong>
            <div class="form-group">
              <label>Nama Ibu</label> 
              <input name="nama_ibu" type="text" class="form-control"  value="<?php echo $row['nama_ibu'];?>"disabled >
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input  name="alamat_ibu" type="text" class="form-control"  value="<?php echo $row['alamat_ibu'];?>" disabled>
            </div>
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input  name="lahir_ibu" type="text" class="form-control"  value="<?php echo $row['lahir_ibu'];?>" disabled>
            </div>
            <div class="form-group">
              <label>Agama</label>
              <input  name="agama_ibu" type="text" class="form-control"  value="<?php echo $row['agama_ibu'];?>"disabled>
            </div>
            <strong>Ayah</strong>
            <div class="form-group">
              <label>Nama Ayah</label> 
              <input name="nama_ayah" type="text" class="form-control"  value="<?php echo $row['nama_ayah'];?>"disabled >
            </div>
            <div class="form-group">
              <label>Pekerjaan</label>
              <input  name="pekerjaan" type="text" class="form-control"  value="<?php echo $row['pekerjaan'];?>" disabled>
            </div>
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input  name="lahir_ayah" type="text" class="form-control"  value="<?php echo $row['lahir_ayah'];?>" disabled>
            </div>
            <div class="form-group">
              <label>Agama</label>
              <input  name="agama_ayah" type="text" class="form-control"  value="<?php echo $row['agama_ayah'];?>"disabled>
            </div>
            <div class="form-group">
              <label>Kewarganegaraan</label>
              <input  name="kewarganegaraan_ayah" type="text" class="form-control"  value="<?php echo $row['kewarganegaraan_ayah'];?>" disabled>
            </div>
            <div class="form-group">
              <label>No KTP/KK</label>
              <input  name="no_ktp" type="text" class="form-control"  value="<?php echo $row['no_ktp'];?>"disabled>
            </div>
               <div class="form-group">
       <div class="form-group">
        <label>File RT</label><br>
        <a href="<?php echo base_url('/uploads/SKL/SuratRT/'.$row['file_rt']); ?>">
          <img src="<?php echo base_url('/uploads/SKL/SuratRT/'.$row['file_rt']); ?>" height="100px">
          </a>
        <input  name="file_rw" type="text" class="form-control"  value="<?php echo $row['file_rt'];?>" disabled>
      </div>
          
      <div class="form-group">
        <label>File RW</label><br>
        <a href="<?php echo base_url('/uploads/SKL/SuratRW/'.$row['file_rw']); ?>">
          <img src="<?php echo base_url('/uploads/SKL/SuratRW/'.$row['file_rw']); ?>" height="100px">
          </a>
        <input  name="file_rw" type="text" class="form-control"  value="<?php echo $row['file_rw'];?>" disabled>
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
               </div>
              </div>
            </form>
        </thead>
          </div>
      </div>
    </section>
</section>