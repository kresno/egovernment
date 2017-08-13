<section style="padding: 70px">
    
 <!-- main, sidebar --> 
      <div class="main">  
       <div class="wrap"> 
 <!-- content -->

       <div class="col-md-12" style="margin-top: 20px">
      <div class="content-bottom" style="margin-left: 100px;padding:20;background-color: white;">
        <br>
        <ol class="breadcrumb">
  <li><a href="<?php echo base_url ('home/Pelayanan') ?>">Pelayanan</a></li>
  <li class="active">Kartu Tanda Penduduk</li>
</ol>
        <center><h3>Kartu Tanda Penduduk</h3></center>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#retribusi" data-toggle="tab">Pelayanan Online</a></li>
                  <li ><a href="#deskripsi" data-toggle="tab">Deskripsi</a></li>
                  <li><a href="#alur" data-toggle="tab">Alur</a></li>
                  <li><a href="#persyaratan" data-toggle="tab">Persyaratan</a></li>
                </ul>
                <div class="tab-content">
                     <div class="tab-pane fade in active" id="retribusi" style="padding-left: 20px">
                    <div class="page-header" style="margin-top:0;margin-bottom:20px;"><h4>Silahkan Login Untuk Mengajukan Surat</h4>
                    <div class="sign-body">
                    <form onSubmit="return cekField()" name="cekForm" method="POST" action="<?php echo base_url('ktp/validasi');?>">
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
                    <input type="submit" class="btn btn-info btn-lg no-margin rounded" id="login-btn" value="Masuk"/>
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
                  <div class="tab-pane fade" id="deskripsi"  style="padding-left: 20px">
                  <br>
                        <div class="deskripsi">
                          <p style="text-align: justify;font-size: 11pt">Kartu Tanda Penduduk atau KTP adalah identitas resmi penduduk sebagai bukti diri yang diterbitkan oleh Dinas Kependudukan dan Pencatatan Sipil yang berlaku di seluruh wilayah Negara Kesatuan Republik Indonesia.</p> </div>
                    </div>
                  <div class="tab-pane fade" id="alur" style="padding-left: 20px">
                  <br>
                      <p><strong>Tata Cara Pembuatan Kartu Tanda Penduduk</strong></p>
<p><strong>1. Tata Cara Penertiban KTP di Desa/Kelurahan</strong></p>
<ul style="list-style-type: lower-alpha; padding-left: 20px">
<li>Mengisi formulir permohonan KTP WNI;</li>
<li>Petugas mencatat dalam buku Harian Peristiwa Kependudukan dan Peristiwa Penting;</li>
<li>Petugas melakukan verifikasi dan validasi data;</li>
<li>Kepala desa/lurah menandatangani formulir permohonan KTP;</li>
<li>Petugas menyerahkan formulir permohonan KTP kepada penduduk untuk dilaporkan kepada camat.</li>
</ul>
<p><strong>2. Tata Cara Penertiban KTP di Kecamatan</strong></p>
<ul style="list-style-type: lower-alpha; padding-left: 20px">
<li>Petugas melakukan verifikasi dan validasi data penduduk;</li>
<li>Camat menandatangani formulir permohonan KTP;</li>
<li>Petugas menyampaikan formulir permohonan KTP yang dilampiri dengan kelengkapan berkas persyaratan kepada Dinas Kependudukan dan Pencatatan Sipil sebagai dasar penerbitan KTP.</li>
</ul>
<p><strong>3. Tata Cara Penertiban KTP di Dinas Kependudukan dan Pencatatan Sipil</strong></p>
<ul style="list-style-type: lower-alpha;padding-left: 20px">
<li>Petugas melakukan perekaman data ke dalam database kependudukan;</li>
<li>Dinas Kependudukan dan Pencatatan Sipil menerbitkan dan menandatangani KTP.</li>
</ul>
<p><strong>4. Tata Cara Penertiban KTP Orang Asing yang Memiliki izin Tinggal Tetap di Dinas Kependudukan dan Pencatatan Sipil</strong></p>
<ul style="list-style-type: lower-alpha; padding-left: 20px">
<li>Mengisi formulir permohonan KTP orang asing;</li>
<li>Petugas melakukan verifikasi dan validasi data penduduk;</li>
<li>Petugas melakukan perekaman data ke dalam database kependudukan;</li>
<li>Kepala Dinas Kependudukan dan Pencatatan Sipil menerbitkan dan menandatangani Kartu Tanda Penduduk</li>
</ul>                   </div>
                  <div class="tab-pane fade" id="persyaratan" style="padding-left: 20px">
                  <br>
                       <p><strong>Syarat-syarat Penerbitan dan Perubahan KTP</strong></p>
<p><strong>1. Penerbitan KTP Baru bagi Penduduk WNI</strong></p>
<ul style="list-style-type: lower-alpha; padding-left: 20px">
<li>Telah berusia 17(tujuh belas) tahun atau sudah kawin atau pernah kawin.</li>
<li>Surat Pengantar RT/RW dan kepala desa/lurah;</li>
<li>Fotocopi:<br />(1) KK;<br />(2) Kutipan Akta Nikah/Akta Kawin bagi penduduk yang belum berusia 17 (tujuh belas) tahun;<br />(3) Kutipan Akta Kelahiran.</li>
<li>Surat Keterangan Datang dari luar negeri yang diterbitkan oleh Dinas Kependudukan dan Pencatatan Sipil bagi WNI yang datang dari luar negeri karena pindah.</li>
</ul>
<p><strong>2. Penerbitan KTP Baru bagi Orang Asing yang Memiliki Izin Tinggal Tetap</strong></p>
<ul style="list-style-type: lower-alpha; padding-left: 20px">
<li>Telah berusia 17 (tujuh belas) tahun atau sudah kawin.</li>
<li>Fotocopi<br />(1) KK;<br />(2) Kutipan Akta Nikah/Akta Kawin bagi penduduk yang belum berusia 17(tujuh belas) tahun;<br />(3) Kutipan Akta Kelahiran;<br />(4) Paspor dan Izin Tinggal Tetap; dan</li>
<li>Kepolisian</li>
</ul>
<p><strong>3. Penerbitan KTP Karena Hilang atau Rusak bagi Penduduk dan WNI atau Orang Asing yang Memiliki Izin Tinggal Tetap</strong></p>
<ul style="list-style-type: lower-alpha; padding-left: 20px">
<li>Surat Keterangan Kehilangan dari kepolisian atau KTP yang rusak;</li>
<li>Fotokopi KK;</li>
<li>Paspor dan Izin Tinggal Tetap bagi orang asing.</li>
</ul>
<p><strong>4. Penerbitan KTP Karena Pindah Datang bagi Penduduk WNI atau Orang Asing yang Memiliki Izin Tinggal Tetap</strong></p>
<ul style="list-style-type: lower-alpha; padding-left: 20px">
<li>Surat Keterangan Pindah/Surat Keterangan Pindah Datang; dan</li>
<li>Surat Keterangan Datang dari luar negeri bagi WNI yang datang dari luar negeri karena pindah.</li>
</ul>
<p><strong>5. Penerbitan KTP Karena Perpanjangan bagi Penduduk WNI atau Orang Asing yang Memiliki Izin Tinggal Tetap</strong></p>
<ul style="list-style-type: lower-alpha; padding-left: 20px">
<li>Fotokopi KK;</li>
<li>KTP lama; dan</li>
<li>Fotokopi Paspor, Izin Tinggal Tetap, dan Surat Keterangan Catatan Kepolisian bagi Orang Asing yang memiliki Izin Tinggal Tetap.</li>
</ul>
<p><strong>6. Penerbitan KTP Karena Adanya Perubahan Data bagi Penduduk WNI atau Orang Asing yang Memiliki Izin Tinggal Tetap</strong></p>
<ul style="list-style-type: lower-alpha; padding-left: 20px">
<li>Fotokopi KK;</li>
<li>KTP lama;</li>
<li>Surat Keterangan/bukti perubahan peristiwa kependudukan dan peristiwa penting.</li>
</l>            
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

    <div class="clear"></div>
          </div>
    </div>
</section>

