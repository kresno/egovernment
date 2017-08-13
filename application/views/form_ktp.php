<section style="padding: 30px">
 <!-- main, sidebar --> 
 <div class="main">  
   <div class="wrap"> 
     <!-- content -->
     <div class="col-md-12" style="margin-top: 20px" >
      <div class="content-bottom" style="margin-left: 150px;padding:20;background-color: white;">
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url ('home/Pelayanan') ?>">Pelayanan</a></li>
          <li><a href="<?php echo base_url ('ktp') ?>">KTP</a></li>
          <li class="active">Kartu Tanda Penduduk</li>
        </ol>        <center><h3>Kartu Tanda Penduduk</h3></center>
        <ul class="nav nav-tabs">
          <li><a href="#deskripsi" data-toggle="tab">Deskripsi</a></li>
          <li><a href="#alur" data-toggle="tab">Alur</a></li>
          <li><a href="#persyaratan" data-toggle="tab">Persyaratan</a></li>
          <li class="active"><a href="#retribusi" data-toggle="tab">Pelayanan Online</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade " id="deskripsi">
            <div class="deskripsi">
            <br/>
              <p style="text-align: justify; font-size: 12pt">Surat keterangan domisili usaha (SKDU) merupakan surat yang diperlukan untuk membuka suatu usaha dan syarat untuk pengurusan surat legal lainnya dalam suatu usaha.</p> </div>
            </div>
            <div class="tab-pane fade " id="alur">
            <br/>
             <p><strong>Alur pembuatan SKDU</strong></p>
             <ol style="list-style-type: lower-alpha;margin-left:30px;font-size: 12pt">
              <li>Membuat Surat pengantar dari RT/RW (jika kantor di rumah/ruko</li>
              <li>Membuat Surat keterangan dari pengelola Gedung (jika di komplek Perkantoran</li>
              <li>Membuat Surat Pengantar dari kelurahan/Desa</li>
              <li>Menyerahkan Berkas ke kantor kecamatan</li>
              <li>Petugas melakukan verifikasi dan validasi data;</li>

            </ol>
          </div>
          <div class="tab-pane fade" id="persyaratan"><br/>
            <p><strong>Berkas-Berkas yang harus dilengkapi</strong></p>

            <ol style="list-style-type: lower-alpha;margin-left:30px;font-size: 12pt">
              <li>File Akte Notaris Pendirian dan/atau Perubahan (jika ada)</li>
              <li>File KTP Direktur/Penanggung Jawab Perusahaan</li>
              <li>File Kartu Keluarga Direktur/Penanggung Jawab Perusahaan</li>
              <li>File Surat Pengantar dari RT/RW (jika Kantor di Rumah/Ruko)</li>
              <li>File Surat Keterangan Domisili dari Pengelola Gedung (jika di Komplek Perkantoran)</li>
              <li>File PBB tahun terakhir dan Surat Sewa (jika Kantor sewa)</li>
            </ol>
          </div>
          <div class="tab-pane fade in active" id="retribusi">
           <div class="page-header" style="margin-top:20px;margin-bottom:20px;">
             <div class="sign-body">
              <div class="formulir_bottom">

               <form name='formulir_domisili' method='post' id='formulir' enctype='multipart/form-data' action="<?php echo base_url('ktp/data_user');?>">
                <h3>Isilah formulir di bawah ini dengan lengkap dan benar. </h3>
                <p>
                    <label>NIK</label>
                    <input type="text"  value="<?php echo $data_user[0]['nik']?>" disabled>
                    <input type="hidden"  value="<?php echo $data_user[0]['nik']?>" id="nik" name="nik">
                  </p>
                 <p>
                  <label>Nama</label> 
                  <input type="text"  id="nama" name="nama" required>
                </p>
                <p>
                  <label>Alamat</label>
                  <input type="text"  id="alamat" name="alamat" required>
                </p>
                <p>
                  <label>provinsi</label>
                  <input type="text"  id="provinsi" name="provinsi" value="" required>
                </p>
                <p> 
                  <label>Kabupaten</label>
                  <input type="text"  id="kabupaten" name="kabupaten" required>
                </p>
                <p>
                  <label>Kecamatan</label>
                  <input type="text"  id="kecamatan" name="kecamatan" required>
                </p>
                <p>
                  <label>Kelurahan</label>
                  <input type="text"  id="Kelurahan" name="kelurahan" required>
                </p>
                <p>
                  <label>Permohonan KTP</label> <br >
                  <select name= "status pemohonan">
                  <option>--Pilih--</option>
        <option value="Perpanjang">Perpanjang</option>
        <option value="Pergantian">Pergantian</option>
             </select></p>
               
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
                  <label>Foto 3 x 4</label>
                  <input name='file_foto' type='file' id='file_foto' size='100' required />
                </p><br />
                <p>
                <p>
                  <label>Fotocopy KK</label>
                  <input name='file_kk' type='file' id='file_kk' size='100' required />
                </p><br />
                <p>
                  <input type='submit' onclick="return confirm('Data telah di inputkan');" value='Simpan' id='submit' />
                  <input type='reset' value='Batal' id='reset' onclick=self.history.back()>
                  <br />
                </p>
              </form>
            </div>                      
          </div><!-- /.sign-body -->
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

