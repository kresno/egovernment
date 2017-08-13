<section  style="padding: 70px;">
<div class="main">
   <div class="wrap"> 
   <div class="col-md-12" style="margin-top: 20px">
   <div class="content-bottom" style=" margin-left:100px; padding: 20px; background-color: white;">
    <br>
    <ol class="breadcrumb">
  <li><a href="<?php echo base_url ('home/Pelayanan') ?>">Pelayanan</a></li>
  <li class="active">Surat Keterangan Domisili Usaha</li>
</ol>
      <center><h3>Surat Keterangan Domisili Usaha</h3></center>
      <ul class="nav nav-tabs" >
          
        <li class="active" > <a href="#retribusi" data-toggle="tab">Pelayanan Online</a></li>
        <li><a href="#deskripsi" data-toggle="tab">Deskripsi</a></li>
        <li><a href="#alur" data-toggle="tab">Alur</a></li>
        <li><a href="#persyaratan" data-toggle="tab">Persyaratan</a></li>
      </ul>
      <div class="tab-content">
          <div class="tab-pane fade in active" id="retribusi" style="padding-left: 20px">
         <div class="page-header" style="margin-top:0;margin-bottom:20px;">
             <h4>Silahkan Login Untuk Mengajukan Surat</h4>
           <div class="sign-body">
           <form onSubmit="return cekField()" name="cekForm" method="POST" action="<?php echo base_url('skdu/validasi');?>">
              <div class="form-group">

                <div class="form-group field-register-form-nik">
                  <label class="control-label" for="register-form-nik">NIK</label>
                  <input type="text" class="form-control" name="f1" maxlength="16" width="25pt" placeholder="NIK" required>
                  <div class="help-block"></div>
                </div>
                  
                  <div class="form-group field-register-form-pass">
                  <label class="control-label" for="register-form-pass">PASSWORD</label>
                  <input type="password"  class="form-control" name="f2" maxlength="16" width="25pt" placeholder="Password" required>
                  <div class="help-block"></div>
                </div>
                  
                <div class="sign-footer">
                  <div class="text-center">
                    <input type="submit" class="btn btn-info btn-lg no-margin rounded" id="login-btn" value="Masuk"/>
                    </div>
                <label class="checkbox">
                    <span class="pull-right">
                        <a data-toggle="modal" href=<?php echo base_url('Register/index');?>> Belum memiliki akun? Silahkan registrasi</a>
                    </span>
                </label>
               </div>
              </div>
            </form>
          </div>
        </div>
      </div>
        <div class="tab-pane fade" id="deskripsi" style="padding-left: 10px;"><br>
            <div class="deskripsi">
                <p style="text-align:left-right;font-size: 12pt">Surat keterangan domisili usaha (SKDU) merupakan surat yang diperlukan untuk membuka suatu usaha dan syarat untuk pengurusan surat legal lainnya dalam suatu usaha.</p></div>
          </div>
          <div class="tab-pane fade" id="alur" style="padding-left: 10px">
          <br>
           <p><strong>Alur pembuatan SKDU</strong></p>
           <ul style="list-style-type: lower-alpha;padding-left:20px; font-size: 12pt">
            <li>Membuat Surat pengantar dari RT/RW (jika kantor di rumah/ruko</li>
            <li>Membuat Surat keterangan dari pengelola Gedung (jika di komplek Perkantoran</li>
            <li>Membuat Surat Pengantar dari kelurahan/Desa</li>
            <li>Menyerahkan Berkas ke kantor kecamatan</li>
            <li>Petugas melakukan verifikasi dan validasi data;</li>
          </ul>
        </div>
        <div class="tab-pane fade" id="persyaratan" style="padding-left: 10px">
        <br>
          <p><strong>Berkas-Berkas yang harus dilengkapi</strong></p>

          <ul style="list-style-type: lower-alpha;padding-left:20px;font-size: 12pt">
            <li>File Akte Notaris Pendirian dan/atau Perubahan (jika ada)</li>
            <li>File KTP Direktur/Penanggung Jawab Perusahaan</li>
            <li>File Kartu Keluarga Direktur/Penanggung Jawab Perusahaan</li>
            <li>File Surat Pengantar dari RT/RW (jika Kantor di Rumah/Ruko)</li>
            <li>File Surat Keterangan Domisili dari Pengelola Gedung (jika di Komplek Perkantoran)</li>
            <li>File PBB tahun terakhir dan Surat Sewa (jika Kantor sewa)</li>
          </ul>
        </div>
        
      
</div>
<script>
        function cekForm(){
          var nik = document.forms["cekForm"]["nik"];
          if(nik!=""){
   //  document.location='<?php echo base_url('form_skdu');?>;
   return true;
 }else{
  alert('Data tidak valid'); 
  return false; 
}

}

</script>
<script src="<?php echo base_url('assets3/js/bootstrap.min.js')?>"></script>
  <script type="application/javascript">
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
     </div>
       </div>
    </div>
</div>
    <div class="clear"></div>
</section>