<section style="padding: 30px">
 <!-- main, sidebar --> 
 <div class="main">  
   <div class="wrap"> 
     <!-- content -->
     <div class="col-md-12" style="margin-top: 20px" >
      <div class="content-bottom" style="margin-left: 150px;padding:20;background-color: white;">
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url ('home/Pelayanan') ?>">Pelayanan</a></li>
          <li><a href="<?php echo base_url ('ho') ?>">HO</a></li>
          <li class="active">Hidder Ordonantie</li>
        </ol>
        
        <center><h3>Surat Keterangan Hidder Ordonantie</h3></center>
        <ul class="nav nav-tabs">
          <li><a href="#deskripsi" data-toggle="tab">Deskripsi</a></li>
          <li><a href="#alur" data-toggle="tab">Alur</a></li>
          <li><a href="#persyaratan" data-toggle="tab">Persyaratan</a></li>
          <li class="active"><a href="#retribusi" data-toggle="tab">Pelayanan Online</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade " id="deskripsi" style="padding-left: 20px"><br/>
            <div class="deskripsi">
              <p style="text-align: justify; font-size: 12pt;margin-left:20px;">Surat keterangan domisili usaha (SKDU) merupakan surat yang diperlukan untuk membuka suatu usaha dan syarat untuk pengurusan surat legal lainnya dalam suatu usaha.</p> </div>
            </div>
            <div class="tab-pane fade " id="alur" style="padding-left: 20px"><br/>
             <p><strong>Alur pembuatan SKDU</strong></p>
             <ol style="list-style-type: lower-alpha; font-size: 12pt;margin-left:20px;";>
              <li>Membuat Surat pengantar dari RT/RW (jika kantor di rumah/ruko</li>
              <li>Membuat Surat keterangan dari pengelola Gedung (jika di komplek Perkantoran</li>
              <li>Membuat Surat Pengantar dari kelurahan/Desa</li>
              <li>Menyerahkan Berkas ke kantor kecamatan</li>
              <li>Petugas melakukan verifikasi dan validasi data;</li>
            </ol>
          </div>
          <div class="tab-pane fade" id="persyaratan" style="padding-left: 20px"><br/>
            <p><strong>Berkas-Berkas yang harus dilengkapi</strong></p>
            <ol style="list-style-type: lower-alpha;font-size: 12pt;margin-left:20px;">
              <li>File Akte Notaris Pendirian dan/atau Perubahan (jika ada)</li>
              <li>File KTP Direktur/Penanggung Jawab Perusahaan</li>
              <li>File Kartu Keluarga Direktur/Penanggung Jawab Perusahaan</li>
              <li>File Surat Pengantar dari RT/RW (jika Kantor di Rumah/Ruko)</li>
              <li>File Surat Keterangan Domisili dari Pengelola Gedung (jika di Komplek Perkantoran)</li>
              <li>File PBB tahun terakhir dan Surat Sewa (jika Kantor sewa)</li>
            </ol>
          </div>
          <div class="tab-pane fade in active" id="retribusi">
           <div class="page-header" style="margin-top:0;margin-bottom:20px;">
             <div class="sign-body">
               <div class="formulir_bottom">

                <form name='formulir_domisili' method='post' id='formulir' enctype='multipart/form-data' action="<?php echo base_url('ho/data_user');?>">
                  <h3>Isilah formulir di bawah ini dengan lengkap dan benar. </h3>
                   <p>
                    <label>NIK</label>
                    <input type="text"  value="<?php echo $data_user[0]['nik']?>" disabled>
                    <input type="hidden"  value="<?php echo $data_user[0]['nik']?>" id="nik" name="nik">
                  </p>
                  <p>
                    <label>Nama</label>
                    <input type="text"  value="<?php echo $data_user[0]['nama']?>" disabled>  
                    <input type="hidden"  value="<?php echo $data_user[0]['nama']?>" id="nama" name="nama">
                  </p>
                  <p> 
                    <label>Tempat Lahir</label>
                      <input type="text"  value="<?php echo $data_user[0]['tempat_lahir']?>" disabled>
                      <input type="hidden"  value="<?php echo $data_user[0]['tempat_lahir']?>" id="tempat_lahir" name="tempat_lahir">
                  </p>
                  <p>
                    <label>Tanggal Lahir</label>
                    <input type="text" value="<?php echo $data_user[0]['tgl_lahir']?>" disabled>
                      <input type="hidden"  value="<?php echo $data_user[0]['tgl_lahir']?>" id="tgl_lahir" name="tgl_lahir">
                  </p>
                  <p>
                    <label>Jenis Kelamin</label>
                    <input type="text" value="<?php echo $data_user[0]['jenis_kelamin']?>" disabled>
                      <input type="hidden"  value="<?php echo $data_user[0]['jenis_kelamin']?>" id="jenis_kelamin" name="jenis_kelamin">
                  </p>
                  <p>
                    <label>Kewarganegaraan</label>
                    <input type="text" value="<?php echo $data_user[0]['kewarganegaraan']?>" disabled>
                      <input type="hidden"  value="<?php echo $data_user[0]['kewarganegaraan']?>" id="kewarganegaraan" name="kewarganegaraan">
                  </p>
                  <p>
                    <label>Agama</label> 
                    <input type="text" value="<?php echo $data_user[0]['agama']?>" disabled>
                      <input type="hidden"  value="<?php echo $data_user[0]['agama']?>" id="agama" name="agama">
                  </p>
                  <p>
                    <label>Pekerjaan</label>
                    <input type="text" value="<?php echo $data_user[0]['pekerjaan']?>" disabled>
                      <input type="hidden"  value="<?php echo $data_user[0]['pekerjaan']?>" id="pekerjaan" name="pekerjaan">
                  </p>
                  <p>
                    <label>Alamat</label>
                    <input type="text" value="<?php echo $data_user[0]['alamat']?>" disabled>
                      <input type="hidden"  value="<?php echo $data_user[0]['alamat']?>" id="alamat" name="alamat">
                  </p>
                  <p>
                    <label>Nama Yayasan</label>
                    <input type='text' name='nama_yayasan' id='nama_yayasan'/>
                  </p>
                  <br/>
                  <p>
                    <label>No Akta Pendirian Yayasan</label>
                    <input type='text' name='akta_pendirian_yayasan' id='akta_pendirian_yayasan' placeholder="NO akta" />
                  </p>
                  <br/>
                  <p>
                    <label>Lokasi Bangunan</label>
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
                    <label>Foto Copy KTP</label>
                    <input name='file_ktp' type='file' id='file_ktp' size='100' required />
                  </p><br />
                  <p>
                    <label>Foto Copy Akta Pendirian Perusahaan </label>
                    <input name='file_akte' type='file' id='file_akte' size='100' required />
                  </p><br />
                  <p>
                    <label>Foto Copy Bukti kepemilikan tanah</label>
                    <input name='file_bukti_tanah' type='file' id='file_bukti_tanah' size='100' required />
                  </p><br />
                  <p>
                    <label>Foto Copy IMB</label>
                    <input name='file_imb' type='file' id='file_imb' size='100' required />
                  </p><br />
                  <p>
                    <label>Foto Copy Surat persetujuan Pengelola Lingkungan</label>
                    <input name='file_sppl' type='file' id='file_sppl' size='100' required />
                  </p><br />
                  <p>
                    <label>Foto Copy Surat Keterangan Domisili Usaha</label>
                    <input name='file_skdu' type='file' id='file_skdu' size='100' required />
                  </p><br />
                  <p>
                    <label>Denah Petunjuk Lokasi</label>
                    <input name='foto_denah' type='file' id='file_denah' size='100' required />
                  </p>
                  <p>
                    <p>
                      <label>Photo Tampak depan bangunan</label>
                      <input name='foto_depan' type='file' id='foto_depan' size='100' required />
                    </p><br />
                    <p>
                      <label>File Persetujuan Warga</label>
                      <input name='file_persetujuan' type='file' id='foto_persetujuan' size='100' required />
                    </p>
                    <p>
                      <p>
                        <label>PBB Tahun Terakhir / Surat Sewa</label>
                        <input name='file_pbb' type='file' id='file_pbb' size='100' required />
                      </p><br />

                      <p>
                        <input type='submit' onclick="return confirm('Data telah di inputkan');" value='Simpan' id='submit' />
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
     </div>
    </div>
      </section>

