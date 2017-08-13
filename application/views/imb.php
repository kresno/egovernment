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
  <li class="active">Surat Izin Mendirikan Bangunan</li>
</ol>
        <center><h3>Izin Mendirikan Bangunan</h3></center>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#retribusi" data-toggle="tab">Pelayanan Online</a></li>
                  <li ><a href="#deskripsi" data-toggle="tab">Deskripsi</a></li>
                  <li><a href="#alur" data-toggle="tab">Alur</a></li>
                  <li><a href="#persyaratan" data-toggle="tab">Persyaratan</a></li>
                </ul>
                <div class="tab-content">
                     <div class="tab-pane fade  in active" id="retribusi" style="padding-left: 20px">
                    <div class="page-header" style="margin-top:0;margin-bottom:20px;"><h4>Silahkan Login Untuk Mengajukan Surat</h4>
                    <div class="sign-body">
                     <form onSubmit="return cekField()" name="cekForm" method="POST" action="<?php echo base_url('imb/validasi');?>">
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
                  <div class="tab-pane fade" id="deskripsi" style="padding-left: 20px">
                  <br>
                        <div class="deskripsi">
                          <p style="text-align: justify;font-size: 11pt">Surat izin mendirikan bangunan (IMB) rumah tinggal maksimal 50 m2 adalah surat bukti dari pemerintah daerah bahwa pemilik bangunan gedung dapat mendirikan bangunan sesuai fungsi yang telah ditetapkan dan berdasarkan rencana teknis bangunan.</p> </div>
                    </div>
                  <div class="tab-pane fade" id="alur" style="padding-left: 20px">
                  <br>
                      <p><strong>Tata Cara Pembuatan Surat IMB</strong></p>
<p><strong>1. Tata Cara Pengajuan Permohonan IMB (PIMB) Rumah Tinggal</strong></p>
<ul style="list-style-type: lower-alpha; padding-left: 20px">
<li>Pengajuan Permohonan IMB (PIMB) Rumah Tinggal diajukan ke Loket PTSP di kantor Kecamatan setempat.</li>
<li>Pengajuan PIMB, harus dilengkapi dengan kelengkapan persyaratan sebagaimana telah diatur dalam Peraturan Gubernur No.129 Tahun 2012, tentang Tatacara Pemberian Pelayanan Bidang Perizinan Bangunan.</li>
<li>Setelah berkas diteliti administratip dan dinilai teknis serta diperiksa lapangan, maka petugas penilai akan menghitung besarnya retribusi IMB.</li>
<li>Penilai akan membuat Surat Ketetapan Retribusi (SKRD) IMB untuk Pemohon.</li>
<li>Pemohon IMB harus segera membayar Retribusi IMB ke Kas Daerah/ Bank DKI di Kecamatan, dan akan menerima bukti pembayaran berupa SKRD yang telah di print Tanda Lunas. </li>
<li>Dengan menyerahkan Bukti Pembayaran SKRD tersebut keloket PTSP, maka berkas Permohonan IMB diproses untuk penerbitan IMB oleh PTSP Kecamatan.</li>
<li>IMB Rumah Tinggal yang telah diterbitkan dapat diambil oleh Pemohon/ Kuasa di Loket PTSP Kecamatan.</li>
</ul>
<p><strong>2. Tata Cara Permohonan IMB (PIMB) bangunan Umum (Non Rumah Tinggal s/d 8 Lantai)</strong></p>
<ul style="list-style-type: lower-alpha;padding-left: 20px">
<li>Pengajuan Permohonan IMB (PIMB) Rumah Tinggal diajukan ke Loket PTSP setempat.</li>
<li>Pengajuan IMB, harus dilengkapi dengan kelengkapan persyaratan sebagaimana telah diatur dalam Peraturan Gubernur No.129 Tahun 2012, tentang Tatacara Pemberian Pelayanan di Bidang Perizinan Bangunan.</li>
<li>Setelah berkas diteliti administratip dan dinilai teknis serta diperiksa lapangan, maka petugas penilai akan menghitung besarnya retribusi IMB.</li>
<li>Penilai akan membuat Surat Ketetapan Retribusi Daerah (SKRD) IMB untuk Pemohon.</li>
<li>Pemohon IMB harus segera membayar Retribusi IMB dan akan menerima bukti pembayaran berupa SLRD yang telah di print Lunas.</li>
<li>Dengan menyerahkan Bukti Pembayaran tersebut keloket PTSP, maka berkas Permohonan IMB diproses untuk diterbitkan IMB oleh PTSP</li>
<li>IMB Rumah Tinggal Pemugaran dan Bangunan Umum yang telah diterbitkan dapat diambil oleh Pemohon di Loket PTSP Kota Administrasi setempat. </li>
</ul>
            </div>
                  <div class="tab-pane fade" id="persyaratan" style="padding-left: 20px">
                       <br>
                       <p><strong>Berkas-Berkas untuk membuat Surat IMB Rumah Tinggal  </strong></p>
<ul style="list-style-type: lower-alpha;padding-left: 20px">
<li>Foto Copy Kartu Tanda Penduduk (KTP) yang masih berlaku dan bagi pemohon yang berbadan hukum dilengkapi dengan akte pendirian</li>
<li>Surat kuasa dan fotocopy Kartu Tanda Penduduk (KTP) yang diberi kuasa dalam hal permohonan bukan dilakukan oleh pemohon sendiri, bermeterai cukup</li>
<li> Surat Konfirmasi Status Wajib Pajak (SKSWP) dari Kantor Pelayanan Pajak Pratama Kota Bogor</li>
<li>Surat Kesanggupan mematuhi persyaratan teknis bangunan (Form IMB.2)</li>
<li>Fotocopy sertifikat hak atas tanah atau Akte Jual Beli / PPJB bagi perumahan terstruktur</li>
<li>Gambar rencana bangunan (Denah, tampak, dan Potongan Skala 1:100 atau 1:200)</li>
<li>Surat Persetujuan Tetangga yang berbatasan langsung, diketahui oleh Rukun Tetangga (RT) dan Rukun Warga (RW) dengan melampirkan Foto Copy KTP (Form IMB.3)</li>
<li>Perhitungan konstruksi untuk bangunan bertingkat yang ditandatangani oleh perencana konstruksi dan disetujui oleh pemilik</li>
<li>IMB lama dan gambar bangunan gedung bila bermaksud memperluas/renovasi bangunan</li>
<li>Fotokopi tanda bukti lunas Pembayaran Pajak Bumi dan Bangunan (PBB) tahun berjalan</li>
</ul>  
<p><strong>Berkas-Berkas untuk membuat Surat IMB Bangunan Umum (Non Rumah Tinggal s/d 8 Lantai )  </strong></p>
<ul style="list-style-type: lower-alpha; padding-left: 20px">
<li>Foto Copy Kartu Tanda Penduduk (KTP) yang masih berlaku dan bagi pemohon yang berbadan hukum dilengkapi dengan akte pendirian</li>
<li>Surat kuasa dan fotocopy Kartu Tanda Penduduk (KTP) yang diberi kuasa dalam hal permohonan bukan dilakukan oleh pemohon sendiri, bermeterai cukup</li>
<li>Surat Konfirmasi Status Wajib Pajak (SKSWP) dari Kantor Pelayanan Pajak Pratama Kota Bogor</li>
<li>Surat Kesanggupan mematuhi persyaratan teknis bangunan (Form IMB.2)</li>
<li>Fotocopy sertifikat hak atas tanah atau Akte Jual Beli / PPJB bagi perumahan terstruktur</li>
<li>Fotokopi tanda bukti lunas Pembayaran Pajak Bumi dan Bangunan (PBB) tahun berjalan</li>
<li>Gambar denah arsitektur ( denah tampak dan potongan ) skala (1 : 100 atau 1 : 200)</li>
<li>Surat Persetujuan Tetangga yang berbatasan langsung, diketahui oleh Rukun Tetangga (RT) dan Rukun Warga (RW) dengan melampirkan Foto Copy KTP (Form IMB.3) tercantum dalam lampiran 26, apabila tidak memerlukan persyaratan pengendalian dampak lingkungan berupa Amdal</li>
<li>Perhitungan dan gambar rencana konstruksi serta laporan hasil penyelidikan tanah untuk jenis bangunan yang memerlukan penelitian tersebut</li>
<li>Foto Copy Izin Penggunaan Pemanfaatan Tanah (IPPT)</li>
<li>izin lingkungan / SPPL</li>
<li>Foto Copy bukti pembayaran keikutsertaan BPJS Ketenagakerjaan</li>
<li>IMB asli bila bermaksud bongkarberdirikan / perubahan fungsi bangunan gedung</li>
<li>Foto Copy IMB lama bila bermaksud memperluas / memperbaiki bangunan gedung</li>
<li>Rencana Tapak / Siteplan yang telah disahkan, bagi yang memenuhi kriteria siteplan</li>
<li>Rencana Anggaran Biaya (RAB) mechanical electrical (ME)</li>
<li>Surat Perolehan Hak (SPH) Prioritas untuk Tempat Pemakaman Umum (TPU) dan tanda terima pengurusan sertifikat dan BPN (Perumahan Horizontal dan Vertikal)</li>
<li>foto kopi Izin Prinsip PMA/PMDN</li>
</ul>  
           </div>
                 
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
      </div>
      </div>


    <div class="clear"></div>
</section>

