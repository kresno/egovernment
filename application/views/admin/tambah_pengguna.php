<section id="main-content">
  <section class="wrapper">
  <div class="col-md-12 mt">
                      <div class="content-panel" style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i> Tambah Pengguna</h4>
                            
                            <hr>
                                <thead>
                               <form name="data_penduduk" method="post" id="data" enctype='multipart/form-data' action="<?php echo base_url('admin/tambah_pengguna/tambah');?>">

         <label>Username</label>
        <input  name="username" type="text" class="form-control" id="username" name="username">
        <br/>
        <label>Password</label>
        <td><input class="form-control" type="password"  value="" id="password" name="password">  
        <br/>
        <label>Nama Lengkap</label>
        <input class="form-control" type="text"  value="" id="nama_lengkap" name="nama_lengkap" >
        <br/>
        <label>Level</label>
        <td> <select name="level" id="level">
                       <option >--Pilih--</option>
                       <option value="kelurahan">Kelurahan</option>
                       <option value="kecamatan">Kecamatan</option>
                      </select> 
        <br/>  
        <label>Email</label>
        <input class="form-control" type="text"  value="" id="email" name="email"  ></td>
        <br/>
        <input class="btn btn-info" type="submit" class="form-control"  value="Submit" id="submit" name="submit"  >
        <a href="<?php echo base_url ('admin/manajemen_pengguna/tampil') ?>" class="btn btn-info" role="button">Batal</a>
                          
      </form>
      </thead>
      </div> 
      </div>
    </section>
</section>

