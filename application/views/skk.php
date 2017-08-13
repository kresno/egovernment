<section style="padding: 70px">

 <!-- main, sidebar --> 
 <div class="main">  
   <div class="wrap"> 

     <!-- content -->

     <div class= "col-md-12" style="margin-top: 20px" >
      <div class="content-bottom" style="margin-left: 100px;padding:20;background-color: white;">
      <br>
      <ol class="breadcrumb">
  <li><a href="<?php echo base_url ('home/Pelayanan') ?>">Pelayanan</a></li>
  <li class="active">Surat Keterangan Kematian</li>
</ol>
        <center><h3>Surat Keterangan Kematian</h3></center>
        <ul class="nav nav-tabs">
          <li  class="active"><a href="#retribusi" data-toggle="tab">Pelayanan Online</a></li>
          <li><a href="#deskripsi" data-toggle="tab">Deskripsi</a></li>
          <li><a href="#alur" data-toggle="tab">Alur</a></li>
          <li><a href="#persyaratan" data-toggle="tab">Persyaratan</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="retribusi"style="padding-left: 10px">
              <h4>Silahkan Login Untuk Mengajukan Surat</h4>

              <div class="sign-body">
                <form onSubmit="return cekField()" name="cekForm" method="POST" action="<?php echo base_url('skk/validasi');?>">
                  <div class="form-group">
                    <div class="form-group field-register-form-nik">
                      <label class="control-label" for="register-form-nik">NIK</label>
                      <input type="text" id="register-form-nik" class="form-control" name="f1" maxlength="16" width="25pt" placeholder="NIK" required>
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
          <div class="tab-pane fade " id="deskripsi" style="padding-left: 10px">
            <br>
            <div class="deskripsi">
              <p style="text-align: justify;font-size: 11pt">Bedasarkan Peraturan Presiden Republik Indonesia Nomor 25 tahun 2008 tentang persyaratan dan tata cara pendaftaran penduduk dan pencatatan sipil bahwa pencatatan kematian di wilayah Negara Kesatuan Republik Indonesia dilakukan pada Dinas Kependudukan dan Pencatatan Sipil tempat terjadinya kematian.</p>

            </div>
          </div>
          <div class="tab-pane fade" id="alur"style="padding-left: 10px">
            <br>
            <p><strong>A. Tata Cara Pencatatan Kematian&nbsp;<strong>di Wilayah NKRI</strong></strong></p>
            <p><strong>1. Pencatatan Kematian WNI&nbsp;</strong></p>
            <ul style="list-style-type: lower-alpha;padding-left:20px;">
              <li>Pelapor mengisi dan menyerahkan formulir Pelaporan Kematian dengan melampirkan persyaratan;</li>
              <li>Kepala desa/lurah menerbitkan Surat Keterangan Kematian;</li>
              <li>Pejabat Pencatatan Sipil mencatat pada Registrasi Akta Kematian dan menerbitkan Kutipan Akta Kematian;</li>
              <li>Dinas Kependudukan dan Pencatatan Sipil memberitahukan data hasil pencatatan kematian kepada Dinas Kependudukan dan Pencatatan Sipil tempat domisili yang bersangkutan;</li>
              <li>Dinas Kependudukan dan Pencatatan Sipil tempat domisili mencatat dan merekam dalam database kependudukan.</li>
            </ul>
            <p><strong>2.&nbsp;<strong>Pencatatan Kematian bagi Orang Asing</strong></strong></p>
            <ul style="list-style-type: lower-alpha;padding-left:20px;">
              <li>Pelapormengisi dan menyerahkan formulir Pelaporan Kematian dengan melampirkan persyaratan;</li>
              <li>Pejabat Pencatatan Sipil pada Dinas Kependudukan dan Pencatatan Sipil mencatat pada Registrasi Akta Kematian dan menerbitkan Kutipan Akta Kematian;</li>
              <li>Dinas Kependudukan dan Pencatatan Sipil memberitahukan data hasil pencatatan kematian kepada Dinas Kependudukan dan Pencatatan Sipil tempat Domisili yang bersangkutan;</li>
              <li>Dinas Kependudukan dan Pencatatan Sipil mencatat dan merekam dalam database kependudukan tempat domisili.</li>
            </ul>
            <p><strong>3.&nbsp;<strong>Pencatatan Kematian Orang Hilang/ Mati yang Tidak Ditemukan Jenazahnya</strong></strong></p>
            <ul style="list-style-type: lower-alpha;padding-left:20px;">
              <li>Pelapor mengisi dan menyrahkan formulir Pelaporan Kematian dengan melampirkan persyaratan;</li>
              <li>Pejabat Pencatatan Sipil pada Dinas Kependudukan dan Pencatatan Sipil mencatat pada Registrasi Akta Kematian dan menerbitkan Kutipan Akta Kematian;</li>
              <li>Dinas Kependudukan dan Pencatatan Sipil mencatat dan merekam dalam database kependudukan.</li>
            </ul>
            <p><strong>B. Pencatatan Kematian di Luar Wilayah NKRI</strong></p>
            <p><strong><strong>1. Pelaporan Kematian WNI</strong></strong></p>
            <ul style="list-style-type: lower-alpha;padding-left:20px;">
              <li>Pelapor mengisi formulir Pelaporan Kematian dengan menyerahkan persyaratan kepada Pejabat Konsuler;</li>
              <li>Pejabat Konsuler mencatat pelaporan kematian dan memberikan surat bukti pencatatan kematian atau Surat Keterangan Kematian dari negara setempat;</li>
              <li>Pejabat Konsuler mengirimkan data kematian kepada Dinas Kependudukan dan Pencatatan Sipil di tempat domisili yang bersangkutan melalui urusan pemerintah dalam negeri;</li>
              <li>Dinas Kependudukan dan Pencatatan Sipil yang menerima data kematian mencatat dan merekam dalam database kependudukan.</li>
            </ul>
            <p><strong>2. Pencatatan Kematian Orang Hilang/ Mati yang Tidak Ditemukan Jenazahnya</strong></p>
            <ul style="list-style-type: lower-alpha;padding-left:20px;">
              <li>Pelapor mengisi dan menyerahkan formulir Pelaporan Kematian dengan melampirkan persyaratan kepada Pejabat Konsuler;</li>
              <li>Pejabat Konsuler mencatat dalam registrasi Akta Kematian dan menerbitkan Kutipan Akta Kematian;</li>
              <li>Pejabat Konsuler mengirimkan data kematian kepada Dinas Kependudukan dan Pencatatan Sipil melalui Departemen Dalam Negeri.</li>
            </ul>                   
          </div>
          <div class="tab-pane fade" id="persyaratan" style="padding-left: 10px">
            <br>
            <p><strong>A. Pencatatan Kematian di Wilayah NKRI</strong></p>
            <p><strong>1. Pencatatan Kematian WNI&nbsp;</strong></p>
            <ul style="list-style-type: lower-alpha;padding-left:20px;">
              <li>Surat Pengantar dari RT dan RW untuk mendapatkan Surat Keterangan kepala desa/lurah; dan/atau</li>
              <li>Keterangan kematian dari dokter/paramedis</li>
            </ul>
            <p><strong>2. Pencatatan Kematian bagi Orang Asing</strong></p>
            <ul style="list-style-type: lower-alpha;padding-left:20px;">
              <li>Keterangan kematian dari dokter/paramedis;</li>
              <li>Fotokopi KK dan KTP bagi orang asing yang memiliki Izin Tinggal Tetap;</li>
              <li>Fotokopi Surat Keterangan Tempat Tinggal bagi orang asing yang memiliki Izin Tinggal Terbatas; atau</li>
              <li>Fotokopi Paspor bagi orang asing yang memiliki Izin Kunjungan.</li>
            </ul>
            <p><strong>3. Pencatatan Kematian Orang Hilang/ Mati yang Tidak Ditemukan Jenazahnya</strong></p>
            <ul style="list-style-type: lower-alpha;padding-left:20px;">
              <li>KK</li>
              <li>Surat Keterangan Catatan Kepolisian;</li>
              <li>Salinan penetapan pengadilan mengenai kematian yang hilang atau tidak diketahui jenazahnya.</li>
            </ul>
            <p><strong>4. Pencatatan Kematian Orang Hilang/ Mati yang Ditemukan Jenazahnya</strong></p>
            <p style="font-size: 11pt">Dalam pelaporan kematian seseorang yang ditemukan jenazahnya tetapi tidak diketahui identitasnya dicatat oleh Dinas Kependudukan dan Pencatatan Sipil/UPTD Dinas Kependudukan dan Pencatatan Sipil di tempat ditemukan jenazahnya.</p>
            <p style="font-size: 11pt">Pencatatan pelaporan kematian dilakukan oleh Dinas Kependudukan dan Pencatatan Sipil/UPTD Dinas Kependudukan dan Pencatatan Sipil menerbitkan Surat Keterangan Kematian.</p>
            <p><strong>B. Pencatatan Kematian di Luar Wilayah NKRI</strong></p>
            <p><strong>1. Pencatatan Kematian WNI</strong></p>
            <ul style="list-style-type: lower-alpha;padding-left:20px;">
              <li>Surat Keterangan Kematian dari negara setempat;</li>
              <li>Fotokopi Paspor Republik Indonesia; dan/atau</li>
              <li>Identitas lainnya.</li>
            </ul>
            <p><strong>2. Pencatatan Kematian Orang Hilang/ Mati yang Tidak Ditemukan Jenazahnya</strong></p>
            <p style="font-size: 11pt">Pencatatan pelaporan kematian seseorang yang hilang atau mati yang tidak ditemukan jenazahnya atau tidak jelas identitasnya, dicatat di Perwakilan RI di negara setempat atau yang terdekat. Pencatatan pelaporan kematian dengan menyerahkan surat keterangan kepolisian atau instansi lain yang berwenang sesuai peraturan negara setempat.</p> </div>

            
          <script>
           function cekForm(){
            var nik = document.forms["cekForm"]["register-form-nik"];
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


  <div class="clear"></div>
</section>

