<section style="padding: 30px">
 <!-- main, sidebar --> 
 <div class="main">  
   <div class="wrap"> 
    <!-- content -->
    <div class="col-md-12" style="margin-top: 20px" >
      <div class="content-bottom" style="margin-left: 150px;padding:20;background-color: white;">
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url ('home/Pelayanan') ?>">Pelayanan</a></li>
          <li><a href="<?php echo base_url ('sku') ?>">SKK</a></li>
          <li class="active">Surat Keterangan Kematian</li>
        </ol>
        <center><h3>Surat Keterangan Kematian</h3></center>
        <ul class="nav nav-tabs">
          <li><a href="#deskripsi" data-toggle="tab">Deskripsi</a></li>
          <li><a href="#alur" data-toggle="tab">Alur</a></li>
          <li><a href="#persyaratan" data-toggle="tab">Persyaratan</a></li>
          <li class="active"><a href="#retribusi" data-toggle="tab">Pelayanan Online</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade " id="deskripsi" style="padding-left: 20px"><br/>
            <div class="deskripsi">
              <p style="text-align: justify;font-size: 12pt">Surat keterangan domisili usaha (SKDU) merupakan surat yang diperlukan untuk membuka suatu usaha dan syarat untuk pengurusan surat legal lainnya dalam suatu usaha.</p> </div>
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
          <div class="tab-pane fade" id="persyaratan" style="padding-left: 20px"><br/>
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
                 <form name='formulir_domisili' method='post' id='formulir' enctype='multipart/form-data' action="<?php echo base_url('skk/data_user');?>">
                  <h3>Isilah formulir di bawah ini dengan lengkap dan benar. </h3>

                  <p>
                    <label>NIK Pemohon</label>
                    <input type="text"  value="<?php echo $data_user[0]['nik']?>" disabled>
                    <input type="hidden"  value="<?php echo $data_user[0]['nik']?>" id="nik" name="nik">
                  </p>
                  <p>
                    <label>Nama</label>
                    <input type="text"  id="nama" name="nama" required>
                  </p>
                  <p>
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" required>
                      <option >--Pilih--</option>
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </p>
                  <p> 
                    <label>Tempat Lahir</label>
                    <input type="text"  id="tempat_lahir" name="tempat_lahir" required>
                  </p>
                  <p>
                    <label>Tanggal Lahir</label>
                    <input type="date"  id="tgl_lahir" name="tgl_lahir" required >
                  </p>
                  <p>
                    <label>Kewarganegaraan</label>
                    <select name="kewarganegaraan" required>
                    <option >--Pilih--</option>
                    <option value="WNI">Warga Negara Indonesia</option>
                    <option value="WNA">Warga Negara Asing</option>
                    </select>
                  </p>
                  <p>
                    <label>Agama</label> 
                    <input type="text"  id="agama" name="agama" required>
                  </p>
                  <p>
                    <label>Meninggal dunia tanggal</label>
                    <input type="date"  id="tgl_meninggal" name="tgl_meninggal" required >
                  </p>
                  <p>
                    <label>Sebab-sebab meninggal dunia</label>
                    <input type="text"  id="sebab_meninggal" name="sebab_meninggal" required >
                  </p>
                  <p>
                    <label>Tempat Meninggal dunia</label>
                    <input type="text"  id="tempat_meninggal" name="tempat_meninggal" required>
                  </p>
                  <label>Keluarga yang ditinggalkan</label>
              <p><br>
                <label>Nama</label>
                <input type="text"  id="nama_saudara" name="nama_saudara" required>
              </p>
              <p>
                <label>Umur</label>
                <input type="text"  id="umur_saudara" name="umur_saudara" required >
              </p>
              <p>
                    <label>Kewarganegaraan</label>
                    <select name="kewarganegaraan_saudara" required>
                    <option >--Pilih--</option>
        <option value="WNI">Warga Negara Indonesia</option>
        <option value="WNA">Warga Negara Asing</option>
        </select>
                  </p>
              <p>
                <label>Pekerjaan</label>
                <input type="text"  id="pekerjaan" name="pekerjaan" required>
              </p>
              <p>
                <label>Alamat</label>
                <input type="text"  id="alamat_saudara" name="alamat_saudara" required>
              </p>
               <p>*Hanya file gambar jpg/jpeg/png</p> 
                    <p>
                        <label>Surat Pengantar RT</label>
                        <input name='file_rt' type='file' id='file_rt' size='100'required/>
                    </p><br />
                    <p>
                        <label>Surat Pengantar RW</label>
                        <input name='file_rw' type='file' id='file_rw' size='100'required/>
                    </p><br>
              <p>
                <input type='submit'onclick="return confirm('Data telah di inputkan');"  value='Simpan' id='submit' name='submit'/>
                <input type='reset' value='Batal' id='reset' onclick=self.history.back()>
                <br />
              </p>
                   </form>
               </div>
               
            
          </div><!-- /.form-horizontal -->                      
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

