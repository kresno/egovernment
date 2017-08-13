<section id="main-content">
  <section class="wrapper">
    <!-- Small boxes (Stat box) -->
    <div class="col-md-12 mt">
      <div class="content-panel"style="padding-left: 10px">
        <h4><i class="fa fa-angle-right"></i> Edit SKDU</h4>
        <hr>
          <?php
          foreach ($data as $row) 
            ?>
          <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_skdu/update');?>"> 
           <!-- text input -->
           <input  name="id_skdu" type="hidden" class="form-control"  value="<?php echo $row['id_skdu'];?>">
           <div class="form-group">
                <label>Tanggal Daftar </label>
              <input  name="tgl_daftar" type="date" class="form-control"  value="<?php echo $row['tgl_daftar'];?>" >
            </div>
            <div class="form-group">
             <label>Tanggal RT</label>
             <input  name="tgl_rt" type="date" class="form-control"  value="<?php echo $row['tgl_rt'];?>">
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
            <label>Akta perusahaan</label>
            <input  name="akta_perusahaan" type="text" class="form-control"  value="<?php echo $row['akta_perusahaan'];?>" >
          </div>
          <div class="form-group">
            <label>Status tempat</label>
            <input  name="status_tempat" type="text" class="form-control"  value="<?php echo $row['status_tempat'];?>" >
          </div>
          <div class="form-group">
            <label>Luas Tempat</label>
            <input  name="luas_tempat" type="text" class="form-control"  value="<?php echo $row['luas_tempat'];?>" >
          </div>
          <div class="form-group">
            <label>Alamat Usaha</label>
            <input  name="alamat_usaha" type="text" class="form-control"  value="<?php echo $row['alamat_usaha'];?>">
          </div>
          <div class="form-group">
            <label>Jumlah tenaga Kerja</label>
            <input  name="jumlah_tenaga" type="text" class="form-control"  value="<?php echo $row['jumlah_tenaga'];?>">
          </div>
          <div class="form-group">
            <label>File KTP</label>
            <img src="<?php echo base_url('./uploads/SKDU/'.$row['file_ktp']); ?>" height="100px">
            <input  name="file_ktp" type="file" class="form-control"  value="<?php print_r($row) ;?>">
          </div>
          <div class="form-group">
            <label>File KK</label>
            <img src="<?php echo base_url('./uploads/SKDU/'.$row['file_kk']); ?>" height="100px">
            <input  name="file_kk" type="file" class="form-control"  value="<?php echo $row['file_kk'];?>" >
          </div>
          <div class="form-group">
            <label>File Akta</label>
            <img src="<?php echo base_url('./uploads/SKDU/'.$row['file_akte']); ?>" height="100px">
            <input  name="file_akte" type="file" class="form-control"  value="<?php echo $row['file_akte'];?>">
          </div>
          <div class="form-group">
            <label>File PBB</label>
            <img src="<?php echo base_url('./uploads/SKDU/'.$row['file_pbb']); ?>" height="100px">
            <input  name="file_pbb" type="file" class="form-control"  value="<?php echo $row['file_pbb'];?>">
          </div>  
            <div class="form-group">
           <button type='submit'>Simpan</button>
          </div> 
            

        </form>
        </div>
      </div>
  </section>
</section>