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
          <li class="active">Hidder Ordonantie</li>
        </ol>
        <center><h3> Izin Gangguan (Hidder Ordonnantie/HO) Ruang Usaha</h3></center>
        <ul class="nav nav-tabs">
          <li class="active"><a href="#retribusi" data-toggle="tab">Pelayanan Online</a></li>
          <li><a href="#deskripsi" data-toggle="tab">Deskripsi</a></li>
          <li><a href="#alur" data-toggle="tab">Alur</a></li>
          <li><a href="#persyaratan" data-toggle="tab">Persyaratan</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="retribusi" style="padding-left: 20px">
                <div class="page-header" style="margin-top:0;margin-bottom:20px;"><h4>Silahkan Login Untuk Mengajukan Surat</h4>
                  <div class="sign-body">
                    <form onSubmit="return cekField()" name="cekForm" method="POST" action="<?php echo base_url('ho/validasi');?>">
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
          <div class="tab-pane fade " id="deskripsi" style="padding-left: 20px">
            <br>
            <div class="deskripsi">
              <p style="text-align: justify;font-size: 11pt">Surat izin gangguan (hinder ordonnantie/HO) penggunaan ruang usaha adalah pemberian izin tempat usaha kepada perusahaan atau badan di lokasi tertentu yang dapat menimbulkan bahaya, gangguan, atau kerusakan lingkungan.</p> </div>
            </div>
            <div class="tab-pane fade" id="alur" style="padding-left: 20px">
              <br>
              <p><strong>Tata Cara Pembuatan Izin Gangguan</strong></p>
              <li> Pemohon datang ke Kantor kecamatan untuk mengambil berkas permohonan, dimintakan persetujuan tetangga tempat usaha, diketahui oleh Dukuh, Lurah dan Camat, lembar pertama bermaterai Rp 6.000 </li>
                <li>Berkas diserahkan lagi keloket kecamatan untuk diteliti kelengkapan persyaratn yang telah ditentukan, anda akan menerima tanda bukti penerimaan permohonan perizinan.</li>
                <li>Kelompok Kerja melalui sekretariat KPP menyampaikan berkas perizinan kepada Dinas Ketenteraman dan Ketertiban.</li>
                <li>Diproses di Dinas Ketentraman dan Ketertiban cq Seksi Perizinan untuk diteliti ulang.</li>
                <li>peninjauan lokasi bersama instansi terkait, membuat berita acara hasil peninjauan lapangan, dibuat perhitungan biaya retribusi.</li>
                <li>Pemohon membayar di KPP dengan formulir warna putih.</li>
                <li>Bukti pembayaran warna hijau dan penetapan retribusi warna putih diserahkan oleh petugas KPP.</li>
                <li>Dibuatkan Konsep Surat Izin dan Serifikat Izin Gangguan.</li>
                <li>Paraf Bidang Ketentraman dan Ketertiban dan tanda tangan Kepala Dinas atas nama Bupati serta diberi nomor dan dikirim ke KPP.</li>
                <li>Pemohon mengambil izin gangguan.</li>
            </div>
              <div class="tab-pane fade" id="persyaratan"style="padding-left: 20px">
                <br>
                <p><strong>Syarat-syarat Izin Gangguan Ruang Usaha Industri</strong></p>
                  <li>Foto copy KTP Pemohon yang masih berlaku</li>
                  <li>Fotocopy Akta Pendirian Perusahaan dan akta perubahan yang telah disahkan oleh Kementerian Hukum dan HAM bagi yang berbadan hukum, bagi badan usaha melampirkan foto kopi Akta Pendirian yang telah diregistrasi oleh Pengadilan Negeri, untuk koperasi melampirkan surat pengesahan dari Organisasi Perangkat Daerah yang berwenang menangani urusan koperasi</li>
                  <li>Fotocopy bukti kepemilikan tanah dan/atau perjanjian sewa tanah jika menyewa tanah</li>
                  <li>Fotocopy Izin Mendirikan Bangunan (IMB) dan foto kopi site plan bagi yang memiliki</li>
                  <li>Foto copy Izin Gangguan</li>
                  <li>Surat Persetujuan Warga terdekat secara mayoritas/ yang berbatasan langsung dengan lokasi usaha, dilampiri KTP yang masih berlaku dan diketahui oleh RT, RW, Lurah dan Camat.</li>
                  <li>  Fotocopy Bukti Pembayaran Lunas PBB-P2 Tahun Berjalan</li>
                  <li>Dokumen Pengelolaan Lingkungan (AMDAL/UKL-UPL/SPPL)</li>
                  <li>Peta Lokasi</li>
                  <li>fotocopy NPWP Perusahaan/NPWP Cabang Bogor bagi usaha yang kantor pusatnya berada di luar Kota Bogor, NPWP Perorangan untuk usaha perorangan, yang telah diverifikasi dan sesuai dalam sistem konfirmasi status Wajib Pajak</li>
                  <li>Mengisi formulir permohonan izin baru (form HO.1)</li>
                  <li>Mengisi formulir permohonan perpanjangan masa retribusi (form HO.2)</li>
                  <li>Mengisi formulir permohonan izin gangguan perubahan (form HO.3)</li>
                  <li>Foto kopi Izin Prinsip PMA/PMDN</li>
                  <li>Asli Izin Gangguan Lama</li>
                  <li>Surat kuasa bermaterai cukup, apabila pengurusan permohonan izin tidak dilakukan oleh pemohon langsungBagi pemohon yang memiliki ruang usaha tidak lebih dari 100 m2 melampirkan surat pernyataan tidak melakukan perluasan ruang usaha atau perubahan (form HO.2.1)</li>
                  <li>Tanda terima penyampaian Laporan Kegiatan Penanaman Modal (LKPM) periode terakhir (bagi badan hukum/badan usaha kelas menengah dan besar) bagi yang telah memiliki izin prinsip penanaman modal</li>
                  <li>foto kopi bukti pembayaran keikutsertaan BPJS Kesehatan dan Ketenagakerjaan</li>
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
    </div>
     </section>
    
    

