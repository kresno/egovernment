<section id="main-content">
  <section class="wrapper">
    <div class="col-md-12 mt">
      <div class="content-panel" style="padding-left: 10px">
        <h4><i class="fa fa-angle-right"></i> Edit Penduduk</h4>
        <a href="<?php echo base_url ('admin/data_penduduk/tampil') ?>" class="btn btn-info" role="button">Batal</a>
        <hr>
        <thead>
         <form name="data_penduduk" method="post" id="data" enctype='multipart/form-data' action="<?php echo base_url('admin/tambah_penduduk/tambah');?>">
           <label>NIK</label>
           <input  name="nik" type="text" class="form-control" >
           <br/>
           <label>Nama</label>
           <input class="form-control" type="text"  value="" id="nama" name="nama" >
           <br/>
           <label>Tanggal Lahir</label>
           <input class="form-control" type="date"  value="" id="tgl_lahir" name="tgl_lahir"  ></td>
           <br/>
           <label>Jenis Kelamin </label>
           < <select name="jenis_kelamin" class="form-control">
           <option >--Pilih--</option>
           <option value="L">Laki-laki</option>
           <option value="P">Perempuan</option>
         </select>
         <br/>
         <label>Alamat</label>
          <td><input class="form-control" type="text"  value="" id="alamat" name="alamat">  </td>
          <br/>  
          <label>RT</label>
          <td><input class="form-control" type="text"  value="" id="rt"rt name="rt">  </td>
          <br/> 
          <label>RW</label>
         <td><input class="form-control" type="text"  value="" id="rw" name="rw"> </td>
          <br/>  
          <label>Status</label>
          <select name="status_kawin" class="form-control">
            <option >--Pilih--</option>
            <option value="kawin">Kawin</option>
            <option value="belum kawin">Belum kawin</option>
          </select>
          <br/>
          <label>Pekerjaan</label>
          <input type="text" class="form-control"  value="" id="pekerjaan" name="pekerjaan" > 
          <br/>
          <div class="form-group">                            
            <label>Kewarganegaraan</label>
            <select name="kewarganegaraan" class="form-control">
              <option >--Pilih--</option>
              <option value="WNA">Warga Negara Asing</option>
              <option value="WNI">Warga Negara Indonesia</option>
            </select>
          </div> 
          <input class="btn" type="submit" class="form-control"  value="Submit" id="submit" name="submit"  >
        </div>
      </div>
    </section>
</section>
     