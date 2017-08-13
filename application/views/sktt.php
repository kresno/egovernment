<section style="padding: 70px">
    
 <!-- main, sidebar --> 
      <div class="main">  
       <div class="wrap"> 
 <!-- content -->

       <div class="col-md-12" style="margin-top: 20px" >
      <div class="content-bottom" style="margin-left: 100px;padding:20;background-color: white;">
        <br>
        <ol class="breadcrumb">
  <li><a href="<?php echo base_url ('home/Pelayanan') ?>">Pelayanan</a></li>
  <li class="active">Surat Keterangan Tempat Tinggal</li>
</ol>
        <center><h3>Surat Keterangan Tempat Tinggal</h3></center>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#retribusi" data-toggle="tab">Pelayanan Online</a></li>
                  <li ><a href="#deskripsi" data-toggle="tab">Deskripsi</a></li>
                  <li><a href="#alur" data-toggle="tab">Alur</a></li>
                  <li><a href="#persyaratan" data-toggle="tab">Persyaratan</a></li>
                  
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="retribusi" style="padding-left: 10px">
                    <div class="page-header" style="margin-top:0;margin-bottom:20px;"><h4>Silahkan Login Untuk Mengajukan Surat</h4>
                    <div class="sign-body">
                    <form onSubmit="return cekField()" name="cekForm" method="POST" action="<?php echo base_url('sktt/validasi');?>">
                          <div class="form-group">
                              <div class="form-group field-register-form-nik">
                                <label class="control-label" for="register-form-nik">NIK</label>
                                <input type="text" id="register-form-nik" class="form-control" name="f1" maxlength="16" width="25pt" required>
                                <div class="help-block"></div>
                              </div>
                              <div class="form-group field-register-form-pass">
                  <label class="control-label" for="register-form-pass">PASSWORD</label>
                  <input type="password"  class="form-control" name="f2" maxlength="16" width="25pt" placeholder="Password" required>
                  <div class="help-block"></div>
                </div>
                                  <div class="sign-footer">
                                    <div class="text-center">
                                      <input type="submit" class="btn btn-info btn-lg no-margin rounded" id="login-btn" value="masuk"/>
                                      </div>
                                    <label class="checkbox">
                    <span class="pull-right">
                        <a data-toggle="modal" href="<?php echo base_url('register/index');?>"> Belum memiliki akun? Silahkan registrasi</a>
    
                    </span>
                </label>
                                    </div>
                                  </div>
                        </form>
                                  </div>
                                          </div>

                </div>
                  <div class="tab-pane fade " id="deskripsi" style="padding-left: 10px">
                  <br>
                        <div class="deskripsi">
                          <p style="text-align: justify;font-size: 12pt">Surat keterangan tempat tinggal (SKTT) adalah surat untuk warga negara asing yang tinggal sementara di Indonesia.</p> </div>
                    </div>
                  <div class="tab-pane fade" id="alur" style="padding-left: 10px">
                  <br>
                      <p><strong>Tata Cara Pembuatan SKTT</strong></p>
                        <li>Membuat Surat Keterangan dari RT/RW dan Desa;</li>
                        <li>Petugas melakukan verifikasi dan validasi data;</li>
                        <li>Kepala desa/lurah menandatangani Surat Keterangan;</li>
                        <li>Petugas menyerahkan formulir permohonan KTP kepada penduduk untuk dilaporkan kepada camat.</li>
                        <li>petugas kecamatan melakukan validasi data</li>
                        <li>Kepala camat menandatangi SKTT</li>
            </div>
                  <div class="tab-pane fade" id="persyaratan"style="padding-left: 10px">
                  <br>
                      
                       <p><strong>Berkas-Berkas yang harus dipenuhi untuk pembuatan SKTT </strong></p>
                          <li>File Passpor dan Visa</li>
                          <li>File Kartu Izin Tinggal Terbatas (KITTAS</li>
                          <li>File Surat Keterangan Lapor Diri (STLD) dari Mabes Polri</li>
                          <li>File Surat Tanda Melapor (STM) dari Polres Bogor</li>
                          <li>File Buku Mutasi ( Buku Biru ) dari Imigrasi</li>
                          <li>File Surat Izin Tenaga Kerja Asing ( IKTA ) dari Depnakertrans ( bagi tenaga kerja )</li>
                          <li>File Surat Kuasa dari pemohon apabila menguasakan</li>
                          <li>File Pas foto 3x4</li>
    </div>
        </div>
        <script>
           function cekForm(){
            var nik = document.forms["cekForm"]["nik"];
            if(nik!=""){
   //  document.location='<?php echo base_url('form_sku');?>;
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

