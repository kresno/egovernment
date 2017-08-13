<section id="main-content">
  <section class="wrapper">
    <div class="col-md-12 mt">
      <div class="content-panel">
        <h4><i class="fa fa-angle-right"></i> Edit Pengguna</h4>
        <a href="<?php echo base_url ('admin/manajemen_pengguna/tampil') ?>" class="btn btn-info" role="button">Batal</a>
        <hr>
        <thead>
         <form name="manajemen_pengguna" method="post" id="data" enctype='multipart/form-data' action="<?php echo base_url('admin/manajemen_pengguna/tambah');?>">

          <input  name="username" type="hidden" class="form-control" >
          <label>Username</label>
          <input  name="nik" type="text" class="form-control" id="username" name="username">
          <br/>
          <label>Nama Lengkap</label>
          <input class="form-control" type="text"  value="" id="nama_lengkap" name="nama_lengkap" >
          <br/>
          <label>Instansi</label>
          <input class="form-control" type="date"  value="" id="id_instansi" name="id_instansi"  ></td>
          <br/>
          
          <label>Password</label>
          <td><input class="form-control" type="password"  value="" id="password" name="password">  
            <br/>  
          </div> 
          <label>Level</label>
          <td><input class="form-control" type="text"  value="" id="level" name="level">  
            <br/>  
          </div> 
          <input class="btn" type="submit" class="form-control"  value="Submit" id="submit" name="submit"  >


        </form>
      </thead>
    </div>
  </div>
</section>
</section>
