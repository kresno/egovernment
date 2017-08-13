<section style="padding: 30px">
 <!-- main, sidebar --> 
 <div class="main">  
   <div class="wrap"> 
     <!-- content -->
     <div class="col-md-12" style="margin-top: 20px" >
      <div class="content-bottom" style="margin-left: 150px;padding:20;background-color: white;">
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url ('home/Pelayanan') ?>">Pelayanan</a></li>
          <li><a href="<?php echo base_url ('imb') ?>">IMB</a></li>
          <li class="active">Izin Mendirikan Bangunan</li>
        </ol>
        <center><h3>Izin Mendirikan Bangunan</h3></center>
        <ul class="nav nav-tabs">
          <li><a href="#deskripsi" data-toggle="tab">Deskripsi</a></li>
          <li><a href="#alur" data-toggle="tab">Alur</a></li>
          <li><a href="#persyaratan" data-toggle="tab">Persyaratan</a></li>
          <li class="active"><a href="#retribusi" data-toggle="tab">Pelayanan Online</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade " id="deskripsi" style="padding-left: 20px"> <br/>
            <div class="deskripsi">
              <p style="text-align: justify; font-size: 12pt">Surat keterangan domisili usaha (SKDU) merupakan surat yang diperlukan untuk membuka suatu usaha dan syarat untuk pengurusan surat legal lainnya dalam suatu usaha.</p> </div>
            </div>
            <div class="tab-pane fade " id="alur" style="padding-left: 20px"> <br/>
             <p><strong>Alur pembuatan SKDU</strong></p>
             <ol style="list-style-type: lower-alpha;font-size: 12pt">
              <li>Membuat Surat pengantar dari RT/RW (jika kantor di rumah/ruko</li>
              <li>Membuat Surat keterangan dari pengelola Gedung (jika di komplek Perkantoran</li>
              <li>Membuat Surat Pengantar dari kelurahan/Desa</li>
              <li>Menyerahkan Berkas ke kantor kecamatan</li>
              <li>Petugas melakukan verifikasi dan validasi data;</li>

            </ol>
          </div>
          <div class="tab-pane fade" id="persyaratan" style="padding-left: 20px"> <br/>
            <p><strong>Berkas-Berkas yang harus dilengkapi</strong></p>

            <ol style="list-style-type: lower-alpha;font-size: 12pt">
              <li>File Akte Notaris Pendirian dan/atau Perubahan (jika ada)</li>
              <li>File KTP Direktur/Penanggung Jawab Perusahaan</li>
              <li>File Kartu Keluarga Direktur/Penanggung Jawab Perusahaan</li>
              <li>File Surat Pengantar dari RT/RW (jika Kantor di Rumah/Ruko)</li>
              <li>File Surat Keterangan Domisili dari Pengelola Gedung (jika di Komplek Perkantoran)</li>
              <li>File PBB tahun terakhir dan Surat Sewa (jika Kantor sewa)</li>
            </ol>
          </div>
          <div class="tab-pane fade in active" id="retribusi">
           <div class="page-header" style="margin-top:20;margin-bottom:20px;">
             <div class="sign-body">              
              <div class="formulir_bottom">
                <form name='formulir_domisili' method='post' id='formulir' enctype='multipart/form-data' action="<?php echo base_url('imb/data_user');?>">
                  <h3>Isilah formulir di bawah ini dengan lengkap dan benar. </h3>

                  <p>
                    <label>NIK</label>
                    <input type="text"  value="<?php echo $data_user[0]['nik']?>" disabled>
                    <input type="hidden"  value="<?php echo $data_user[0]['nik']?>" id="nik" name="nik">
                  </p>
                  <p>
                    <label>Nama</label>
                    <input type="text"  id="nama" name="nama" value="<?php echo $data_user[0]['nama']?>" disabled>
                  </p>
                  <p> 
                    <label>Tempat Lahir</label>
                    <input type="text"  id="tempat_lahir" name="tempat_lahir" value="<?php echo $data_user[0]['tempat_lahir']?>" disabled>
                  </p>
                  <p>
                    <label>Tanggal Lahir</label>
                    <input type="text"  id="tgl_lahir" name="tgl_lahir" value="<?php echo $data_user[0]['tgl_lahir']?>" disabled>
                  </p>
                  <p>
                    <label>Jenis Kelamin</label>
                    <input type="text"  id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $data_user[0]['jenis_kelamin']?>" disabled>
                  </p>
                  <p>
                    <label>Kewarganegaraan</label>
                    <input type="text"  id="kewarganegaraan" name="kewarganegaraan" value="<?php echo $data_user[0]['kewarganegaraan']?>" disabled>
                  </p>
                  <p>
                    <label>Agama</label> 
                    <input type="text"  id="agama" name="agama" value="<?php echo $data_user[0]['agama']?>" disabled>
                  </p>
                  <p>
                    <label>Pekerjaan</label>
                    <input type="text"  id="pekerjaan" name="pekerjaan" value="<?php echo $data_user[0]['pekerjaan']?>" disabled>
                  </p>
                  <p>
                    <label>Alamat</label>
                    <input type="text"  id="alamat" name="alamat" value="<?php echo $data_user[0]['alamat']?>" disabled>
                  </p>
                  <p>
                    <label>Nama Perusahaan</label>
                    <input type='text' name='nama_perusahaan' id='nama_perusahaan' required />
                  </p>
                  <p>
                    <label>Jenis Usaha</label>
                    <input type='text' name='jenis_usaha' id='jenis_usaha' required />
                  </p>
                  <p>
                    <label>Alamat Usaha</label>
                    <input type='text' name='lokasi_bangunan' id='lokasi_bangunan' required />
                  </p>
                  <h3>Upload Berkas Persyaratan</h3>
                  <p>*Hanya file gambar jpg/gif/png</p> 
                  <p>
                  <label>Surat Pengantar RT</label>
                        <input name='file_rt' type='file' id='file_rt' size='100'required/>
                    </p><br />
                    <p>
                        <label>Surat Pengantar RW</label>
                        <input name='file_rw' type='file' id='file_rw' size='100'required/>
                    </p><br />
                  <p>
                    <label>KTP Direktur / Penanggung Jawab Perusahaan</label>
                    <input name='file_ktp' type='file' id='file_ktp' size='100' required />
                  </p><br />
                  <p>
                    <label>Foto Copy Akta/AJB/sertifikat/Surat Persyaratan penggunaan Tanah</label>
                    <input name='file_sertifikat' type='file' id='file_sertifikat' size='100' required />
                  </p><br />
                  <p>
                    <label>PBB Tahun Terakhir / Surat Sewa</label>
                    <input name='file_pbb' type='file' id='file_pbb' size='100' required />
                  </p><br/>
                  <br/>
                  <p>
                    <label>Fotocopy SK IMB</label>
                    <input name='file_imb' type='file' id='file_imb' size='100' required />
                  </p>
                  <p>
                    <label>Gambar bangunan terdahulu jika akan merenovasi</label>
                    <input name='file_gambar_bangunan' type='file' id='file_imb' size='100' required />
                  </p>
                  <p>
                    <label>Scan surat tidak keberatan tetangga </label>
                    <input name='file_keberatan' type='file' id='file_keberatan' size='100' required />
                  </p>
                  <p>
                    <label>Scan Surat pernyataan kesanggupan mematuhi aturan tertentu</label>
                    <input name='file_kesanggupan' type='file' id='file_kesanggupan' size='100' required />
                  </p>
                  <p>
                    <input type='submit' onclick="return confirm('Data telah di inputkan');"value='Simpan' id='submit' />
                    <input type='reset' value='Batal' id='reset' onclick=self.history.back()>
                    <br />
                  </p>
                </form>
              </div>                
            </div>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
<script src="<?php echo base_url('assets3/js/bootstrap.min.js')?>"></script>
    
  <script type="application/javascript">
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  <div class="clear"></div>
</section>

