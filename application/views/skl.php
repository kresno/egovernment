<section style="padding: 70px"> 
 <div class="main">  
   <div class="wrap"> 
    <!-- content -->

    <div class="col-md-12" style="margin-top: 20px">
      <div class="content-bottom" style="margin-left: 100px;padding:20;background-color: white;">
<br>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url ('home/Pelayanan') ?>">Pelayanan</a></li>
    <li class="active">Surat Keterangan Kelahiran</li>
</ol>
        <center><h3>Surat Keterangan Kelahiran</h3></center>
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
                          <form onSubmit="return cekField()" name="cekForm" method="POST" action="<?php echo base_url('skl/validasi');?>">
                            <div class="form-group">

                              <div class="form-group field-register-form-nik">
                                <label class="control-label" for="register-form-nik">NIK</label>
                                <input type="text" id="nik" class="form-control" name="f1" maxlength="16" placeholder="NIK" width="25pt" required>

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
          <div class="tab-pane fade" id="deskripsi">
            <br>
            <div class="deskripsi" style="padding-left: 10px">
              <p style="text-align: justify;font-size: 11pt;">Surat Keterangan Lahir Merupakan surat keterangan lahir dari kelurahan yang digunakan untuk bayi berusia 0-2 tahun. Setiap kelahiran wajib dilaporkan oleh penduduk kepada Dinas Kependudukan dan Pencatatan Sipil Kab/Kota ditemnpat terjadinya peristiwa kelahiran paling lambat 60 (enam puluh) hari sejak kelahiran. Pelaporan kelahiran yang melampaui batas waktu 60 (enam puluh) hari sampai dengan 1 (satu) tahun sejak tanggal kelahiran dikenai 
                <li>Sanksi administrasi berupa denda paling banyak Rp. 1.000.000,- (satu juta rupiah)</li>
                <li>Mendapat persetujuan Kepala Dinas Kependudukan dan Pencatatan Sipil Kab/Kota.</p>
                  <p style="font-size: 11pt;">Pelaporan Kelahiran yang melampaui batas waktu 1 (satu) tahun dikenai :</li>
                    <li>Sanksi administrasi berupa denda paling banyak Rp. 1.000.000,- (satu juta rupiah)</li>
                    <li> Mendapat penetapan Pengadilan Negeri.</li>
                  </div>
                </div>
                <div class="tab-pane fade" id="alur" style="padding-left: 10px">
                <br>
                  <p><strong>Tata Cara Pembuatan SKL</strong></p>
                  <p><strong>1. Kelahiran ditempat Domisili Ibunya :</strong></p>
                  <ul style="list-style-type: lower-alpha;padding-left: 20px">
                    <li>Penduduk datang ke Petugas Registrasi di Desa/Kelurahan dan mengisi formulir surat keterangan kelahiran.</li>
                    <li>Kepala Desa/Lurah meneruskan formulir Surat Keterangan Kelahiran ke UPTD Dinas Kependudukan dan Pencatatan Sipil.</li>
                    <li>Dalam hal UPTD Dinas Kependudukan dan Pencatatan Sipil tidak ada, Kepala Desa/Lurah mengirimkan formulir Surat Keterangan Kelahiran ke Kecamatan untuk diteruskan kepada Dinas Kependudukan Pencatatan Sipil Kab/Kota.</li>
                    <li>Pejabat Pencatatan Sipil pada UPTD/Dinas Kependudukan dan Pencatatan Sipil Kab/Kota mencatat dalam Register Akta dan menerbitkan Kutipan Akta Kelahiran,</li>
                    <li>Pejabat Pencatatan Sipil menyerahkan Kutipan Akta Kelahiran kepada Pemohon, atau mengirimkan melalui Desa/Kelurahan.</li>
                  </ul>
                  <p><strong>2. Kelahiran diluar Tempat Domisili Ibunya :</strong></p>
                  <ul style="list-style-type: lower-alpha;padding-left: 20px">
                    <li>Penduduk datang ke Dinas Kependudukan dan Pencatatan Sipil Kabupaten/Kota dan mengisi formulir surat keterangan kelahiran dengan menyerahkan surat keterangan kelahiran dari dokter/bidan/penolong kelahiran dan menunjukkan KTP ibu atau bapaknya.</li>
                    <li>Pejabat Pencatatan Sipil pada Dinas Kependudukan dan Pencatatan Sipil Kab/Kota mencatat dalam register Akta Kelahiran dan menerbitkan Kutipan Akta Kelahiran.</li>
                  </ol>
                  <p><strong>3. Kelahiran Anak yang Tidak Diketahui Asal Usulnya :</strong></p>
                  <ul style="list-style-type: lower-alpha;padding-left: 20px">
                    <li>Pelapor/pemohon datang ke UPTD Dinas/Dinas Kependudukan dan Pencatatan Sipil Kabupaten/Kota dan mengisi formulir Surat Keterangan Kelahiran dengan menyerahkan Berita Acara Pemeriksaan dari Kepolisian<span style="text-decoration: underline;"><br /></span></li>
                    <li>Pejabat Pencatatan Sipil pada UPYD Dinas/ Dinas Kependudukan Pencatatan Sipil Kab/Kota mencatat dalam Register Akta Kelahiran dan menerbitkan Kutipan Akta Kelahiran.</li>
                  </ul>                   </div>
                  <div class="tab-pane fade" id="persyaratan" style="padding-left: 10px">
                  <br>
                    <p><strong>Syarat-syarat penerbitan Akta Kelahiran&nbsp;</strong></p>
                    <p><strong>1. Kelahiran ditempat Domisili Ibunya :<br /></strong></p>
                    <ul style="list-style-type: lower-alpha;padding-left: 20px">
                      <li>Surat Keterangan Kelahiran dari dokter/bidan/penolong kelahiran.</li>
                      <li>Nama dan identitas saksi kelahiran.</li>
                      <li>KK dan KTP orang tua.</li>
                      <li>Kutipan akta nikah/Kutipan akta perkawinan.</li>
                    </ul>
                    <p><strong>2. Kelahiran diluar Tempat Domisili Ibunya :<br /></strong></p>
                    <ul style="list-style-type: lower-alpha;padding-left: 20px">
                      <li>Surat Keterangan dari dokter/bidan/penolong kelahiran.</li>
                      <li>Nama dan identitas saksi kelahiran.</li>
                      <li>KK dan KTP orang tua.</li>
                      <li>Kutipan akta nikah/Kutipan akta perkawinan.</li>
                    </ul>
                    <p><strong>3. Kelahiran Anak yang Tidak Diketahui Asal Usulnya :&nbsp;<br /></strong></p>
                    <ul style="list-style-type: lower-alpha;padding-left: 20px">
                      <li>Berita Acara Pemeriksaan dari Kepolisian</li>
                    </ul>                   
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

